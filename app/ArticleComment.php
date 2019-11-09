<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mov\Comments\Traits\HasComments;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\ArticleComment
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
 * @property-read \App\ArticleComment $commentable
 * @property-read \App\User $commentator
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ArticleComment[] $comments
 * @property-read int|null $comments_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment approved()
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\ArticleComment onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleComment whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\ArticleComment withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\ArticleComment withoutTrashed()
 * @mixin \Eloquent
 */
class ArticleComment extends Model
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
        return Article::class;
    }
}
