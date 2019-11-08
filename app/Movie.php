<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Movie
 *
 * @property int $id
 * @property int $uploader
 * @property int $type
 * @property int $provider_id
 * @property string $imdb_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereImdbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Movie whereUploader($value)
 * @mixin \Eloquent
 */
class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uploader',
        'type',
        'imdb_id',
        'provider_id',
    ];

    public function type(): void
    {
        $this->hasOne(MovieType::class);
    }

    public function provider(): void
    {
        $this->hasOne(Provider::class);
    }
}
