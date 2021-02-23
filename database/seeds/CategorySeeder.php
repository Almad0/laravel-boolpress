<?php

use Faker\Generator as Faker;
use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(Faker $faker)
     {
       for ($i=0; $i < 15 ; $i++) {
         $newCat = new Category();
         $newCat->type = $faker->word();
         $newCat->articles = $faker->sentence(6);
         $newCat->save();
       }
     }
}
