<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImdbListsSplitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imdb_lists_splits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('imdb_list_id');
            $table->string('name', 20);
            $table->bigInteger('size')->default(0);
            $table->bigInteger('linecount')->default(0);
            $table->string('start_id')->default(0);
            $table->string('end_id')->default(0);

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
        Schema::dropIfExists('imdb_lists_splits');
    }
}
