<?php

use App\User;
use App\Article;
use App\ArticleType;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('articles')->truncate();

        $faker = Faker::create();
        $users = User::all()->count();
        $types = ArticleType::all()->count();
        $max = 5;

        for ($i = 0; $i <= $max; $i++) {
            $article = new Article();
            $article->author_id = rand(1, $users);
            $article->title = $faker->sentence;
            $article->content = $faker->paragraphs(5, true);
            $article->article_type = rand(1, $types);
            $article->image = null;
            $article->save();
        }
    }
}
