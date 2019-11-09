<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mov\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\MovieComment
 *
 * @property int $id
 * @property int $user_id
 * @property string $content
 * @property bool $is_approved
 * @property string $commentable_type
 * @property int $commentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\MovieComment $commentable
 * @property-read \App\User $commentator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\MovieComment[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment approved()
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\MovieComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieComment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\MovieComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\MovieComment withoutTrashed()
 * @mixin \Eloquent
 */
class MovieComment extends Model
{
    use SoftDeletes, HasComments;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'content',
        'is_approved',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_approved' => 'boolean'
    ];

    /**
     * @param $query
     *
     * @return mixed
     */
    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commentator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return $this
     */
    public function approve()
    {
        $this->update([
            'is_approved' => true,
        ]);

        return $this;
    }

    /**
     * @return $this
     */
    public function disapprove()
    {
        $this->update([
            'is_approved' => false,
        ]);

        return $this;
    }

    /**
     * @return string
     */
    protected function _getModel(): string
    {
        return Movie::class;
    }
}
