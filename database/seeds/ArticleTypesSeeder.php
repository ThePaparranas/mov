<?php

use App\ArticleType;
use Illuminate\Database\Seeder;

class ArticleTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('article_types')->truncate();

        $type = new ArticleType();
        $type->name = 'Filmes';
        $type->save();

        $type = new ArticleType();
        $type->name = 'Séries';
        $type->save();

        $type = new ArticleType();
        $type->name = 'Animes';
        $type->save();

        $type = new ArticleType();
        $type->name = 'Eventos';
        $type->save();

        $type = new ArticleType();
        $type->name = 'Vidas';
        $type->save();
    }
}
