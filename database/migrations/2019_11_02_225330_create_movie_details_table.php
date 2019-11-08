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

            $table->string('title');
            $table->string('year', 4);
            $table->string('rated');
            $table->string('released');
            $table->string('runtime');
            $table->string('genre');
            $table->string('director');
            $table->string('writer');
            $table->string('actors');
            $table->string('plot');
            $table->string('language');
            $table->string('Country');
            $table->string('Awards');
            $table->string('Poster');
            $table->string('Ratings');
            $table->string('Metascore');
            $table->string('imdbRating');
            $table->string('imdbVotes');
            $table->string('imdbID');
            $table->string('Type');
            $table->string('DVD');
            $table->string('BoxOffice');
            $table->string('Production');
            $table->string('Website');
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
