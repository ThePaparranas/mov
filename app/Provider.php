<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Provider
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Provider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Provider extends Model
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
