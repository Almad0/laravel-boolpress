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
       for ($i=0; $i < 5 ; $i++) {
         $newCat = new Category();
         $newCat->name = $faker->word();
         $newCat->description = $faker->sentence(10);
         $newCat->img = $faker->imageUrl(360, 360, 'GattinoPuccioso', true);
         $newCat->save();
       }
     }
}
