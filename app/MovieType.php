<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\MovieType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Movie[] $movies
 * @property-read int|null $movies_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MovieType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Every type can have MANY movies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class, 'type', 'id');
    }
}
