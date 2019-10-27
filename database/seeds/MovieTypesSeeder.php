<?php

use App\MovieType;
use Illuminate\Database\Seeder;

class MovieTypesSeeder extends Seeder
{
    public function run()
    {
        \DB::table('movie_types')->truncate();

        $type = new MovieType();
        $type->name = 'Filme';
        $type->save();

        $type = new MovieType();
        $type->name = 'Série';
        $type->save();

        $type = new MovieType();
        $type->name = 'Anime';
        $type->save();
    }
}
