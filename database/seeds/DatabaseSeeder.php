<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ImdbListsTableSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(ArticleTypesSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(BannedCommentersSeeder::class);
        $this->call(ServerTableSeeder::class);
        $this->call(MovieTypesSeeder::class);
        $this->call(MovieDetailsTableSeeder::class);
        $this->call(MovieServersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
    }
}
