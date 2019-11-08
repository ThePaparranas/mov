<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MovieDetail
 *
 * @property int $id
 * @property int $movie_id
 * @property string $title
 * @property string $year
 * @property string $rated
 * @property string $released
 * @property string $runtime
 * @property string $genre
 * @property string $director
 * @property string $writer
 * @property string $actors
 * @property string $plot
 * @property string $language
 * @property string $Country
 * @property string $Awards
 * @property string $Poster
 * @property string $Ratings
 * @property string $Metascore
 * @property string $imdbRating
 * @property string $imdbVotes
 * @property string $imdbID
 * @property string $Type
 * @property string $DVD
 * @property string $BoxOffice
 * @property string $Production
 * @property string $Website
 * @property string $Response
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereActors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereAwards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereBoxOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereDVD($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereDirector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereImdbID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereImdbRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereImdbVotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereMetascore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail wherePlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail wherePoster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereProduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereRated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereRatings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereReleased($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereResponse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereRuntime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereWriter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MovieDetail whereYear($value)
 * @mixin \Eloquent
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
