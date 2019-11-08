<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ArticleType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'article_id', 'name',
    ];

    public function articles(): void
    {
        $this->belongsToMany(Article::class);
    }
}
