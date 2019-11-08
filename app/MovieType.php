<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MovieType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
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

}
