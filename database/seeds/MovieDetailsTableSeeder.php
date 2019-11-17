<?php

use App\MovieDetail;
use Illuminate\Database\Seeder;

class MovieDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($c = 1; $c <9; $c++) {
            $details = new MovieDetail();

            $json = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . $c . '.json');
            $data = json_decode($json, true);
            $data['movie_id'] = 1;
            $data['Ratings'] = serialize($data['Ratings']);

            $details->fill($data);
            $details->save();
        }
    }
}
