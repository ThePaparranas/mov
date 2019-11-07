<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class MovieDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'movie_id',
        'title',
        'year',
        'rated',
        'released',
        'runtime',
        'genre',
        'director',
        'writer',
        'actors',
        'plot',
        'language',
        'Country',
        'Awards',
        'Poster',
        'Ratings',
        'Metascore',
        'imdbRating',
        'imdbVotes',
        'imdbID',
        'Type',
        'DVD',
        'BoxOffice',
        'Production',
        'Website',
        'Response',
    ];
}
