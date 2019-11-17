<?php

use App\Movie;
use App\MovieDetail;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('movies')->truncate();

        $ids = [
            'tt0848228' => 1,
            'tt0458339' => 1,
            'tt1343097' => 1,
            'tt1568346' => 1,
            'tt9055008' => 2,
            'tt10312776' => 2,
            'tt2861424' => 2,
            'tt0877057' => 3,
        ];

        foreach ($ids as $id => $type) {
            $movie = new Movie();
            $movie->uploader = 1;
            $movie->type = $type;
            $movie->imdb_id = $id;
            $movie->provider_id = null;
            $movie->save();

        }
    }
}
