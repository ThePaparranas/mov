<?php

namespace App;

use Carbon\Carbon;
use App\Mov\Friends\Friendable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\BannedCommenter[] $commentBans
 * @property-read int|null $comment_bans_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $friends_i_am_recipient
 * @property-read int|null $friends_i_am_recipient_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $friends_i_am_sender
 * @property-read int|null $friends_i_am_sender_count
 * @property-read string $gravatar
 * @property-read bool $is_admin
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User includeRelationshipsWith($user)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, Friendable;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'gravatar',
        'isAdmin',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'user_role',
            'user_id',
            'role_id'
        );
    }

    /**
     * Every user can have MANY articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    /**
     * @param $roles
     *
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param $role
     *
     * @return bool
     */
    public function hasRole($role): bool
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }

        return false;
    }

    /**
     * Returns user gravatar
     *
     * @return string
     */
    public function getGravatarAttribute(): string
    {
        return 'https://www.gravatar.com/avatar/'.md5($this->email).'?d=mm&s=256';
    }

    /**
     * Defines and appends the isAdmin attribute to the User Model
     *
     * @return bool
     */
    public function getIsAdminAttribute(): bool
    {
        return $this->isAdmin();
    }

    /**
     * User has admin powers
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('Admin') || $this->hasRole('Dev');
    }

    /**
     * Ban a user from commenting
     *
     * @param int $days The Ban interval in Days
     *
     * @return $this
     */
    public function ban(int $days)
    {
        $ban = new BannedCommenter();
        $ban->user_id = $this->id;
        $ban->days = $days;
        $ban->save();

        return $this;
    }

    /**
     * Check if a user can comment
     *
     * @return bool
     */
    public function canComment(): bool
    {
        if (! $this->hasVerifiedEmail()) {
            return false;
        }

        $bans = $this->commentBans();

        if ($bans->count() === 0) {
            return true;
        }

        $latest = $bans->latest()->first();

        return $this->isBanExpired($latest);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentBans(): HasMany
    {
        return $this->hasMany(BannedCommenter::class);
    }

    /**
     * The date A user can start commenting after ban
     *
     * @return \Carbon\Carbon|string
     */
    public function canCommentAt()
    {
        $bans = $this->commentBans();

        if ($bans->count() === 0) {
            return 'now';
        }

        $latest = $bans->latest()->first();

        return $this->getExpireDate($latest);
    }

    /**
     * @param $latest
     *
     * @return bool
     */
    protected function isBanExpired($latest): bool
    {
        $days = $latest->days;

        if ($days === 0) {
            return false;
        }

        $now = Carbon::now();

        return $this->getExpireDate($latest) < $now;
    }

    /**
     * @param $latest
     *
     * @return Carbon
     */
    protected function getExpireDate($latest): Carbon
    {
        $days = $latest->days;

        /** @var Carbon $banned */
        $banned= $latest->created_at;

        return $banned->addDays($days);
    }
}
