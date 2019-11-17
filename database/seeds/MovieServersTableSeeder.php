<?php

use App\MovieServer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MovieServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('movie_servers')->truncate();

        for ($c = 1; $c <9; $c++) {
            $faker = Faker::create();

            $server = new MovieServer();
            $server->movie_id = $c;
            $server->server_id = 1;
            $server->url = $faker->url;
            $server->save();

            $server = new MovieServer();
            $server->movie_id = $c;
            $server->server_id = 2;
            $server->url = $faker->url;
            $server->save();

            $server = new MovieServer();
            $server->movie_id = $c;
            $server->server_id = 3;
            $server->url = $faker->url;
            $server->save();
        }
    }
}
