<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\MovieServer
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Server[] $servers
 * @property-read int|null $servers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer query()
 * @mixin \Eloquent
 */
class MovieServer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'server_id',
    ];

    /**
     * @return HasMany
     */
    public function servers(): HasMany
    {
        return $this->hasMany(Server::class);
    }
}
