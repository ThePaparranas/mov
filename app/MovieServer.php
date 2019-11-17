<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\MovieServer
 *
 * @property int $id
 * @property int $movie_id
 * @property int $server_id
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Server[] $servers
 * @property-read int|null $servers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereServerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieServer whereUrl($value)
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
        'url'
    ];

    /**
     * @return HasMany
     */
    public function servers(): HasMany
    {
        return $this->hasMany(Server::class);
    }
}
