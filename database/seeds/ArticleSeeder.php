<?php

use Faker\Generator as Faker;
use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
      for ($i=0; $i < 50 ; $i++) {
        $newArticle = new Article();
        $newArticle->title = $faker->word();
        $newArticle->body = $faker->sentence(10);
        $newArticle->author = $faker->word();
        // $newArticle->categories = $faker->word();
        // $newArticle->tags = $faker->words(5, true);
        $newArticle->save();
      }
    }
}
