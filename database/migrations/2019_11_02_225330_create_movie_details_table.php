<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('movie_id');

            $table->string('Title');
            $table->string('Year', 4);
            $table->string('Rated');
            $table->string('Released');
            $table->string('Runtime');
            $table->string('Genre');
            $table->string('Director');
            $table->string('Writer');
            $table->string('Actors');
            $table->mediumText('Plot');
            $table->string('Language');
            $table->string('Country');
            $table->string('Awards');
            $table->string('Poster');
            $table->mediumText('Ratings');
            $table->string('Metascore');
            $table->string('imdbRating');
            $table->string('imdbVotes');
            $table->string('imdbID');
            $table->string('Type');
            $table->string('totalSeasons')->nullable();
            $table->string('DVD')->nullable();
            $table->string('BoxOffice')->nullable();
            $table->string('Production')->nullable();
            $table->string('Website')->nullable();
            $table->string('Response');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_details');
    }
}
