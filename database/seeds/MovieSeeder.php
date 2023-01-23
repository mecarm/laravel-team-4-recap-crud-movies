<?php

use App\Models\Movie;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(Faker $faker)
    {

        for($i=0; $i<100; $i++){
            $newHouse = new Movie();
            $newHouse->title = $faker->name();
            $newHouse->description = $faker->sentence();
            $newHouse->type = $faker->word();
            $newHouse->image = $faker->imageUrl(640, 480, 'movie', true);            ;
            $newHouse->save();
        }

    }
}
