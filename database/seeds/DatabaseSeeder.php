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
        $this->call(MovieTypesSeeder::class);
        $this->call(ProvidersSeeder::class);
        $this->call(ArticleTypesSeeder::class);
    }
}
