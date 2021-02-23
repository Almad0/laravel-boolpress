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
      for ($i=0; $i < 30 ; $i++) {
        $newArticle = new Article();
        $newArticle->title = $faker->word();
        $newArticle->body = $faker->sentence(300);
        $newArticle->categories = $faker->word();
        $newArticle->tags = $faker->word();
        $newArticle->author = $faker->word();
        $newArticle->save();
      }
    }
}
