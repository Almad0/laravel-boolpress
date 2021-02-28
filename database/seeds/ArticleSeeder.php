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
        $newArticle->category_id = $faker->numberBetween(1, 5);
        $newArticle->tag_id = $faker->numberBetween(1, 10);
        $newArticle->save();
      }

    }


    // public function run()
    //   {
    //     DB::table('alpha')->delete();
    //
    //     Alpha::create( array(
    //       'all'           =>  'all',
    //       'your'          =>  'your',
    //       'stuff'         =>  'stuff',
    //     ))->beta()
    //       ->attach( $idOfYourBeta );
    //   }


}
