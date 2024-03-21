<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Movie;

class Movies extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newMovie = new Movie();
            $newMovie->title = $faker->sentence(3, true); 
            $newMovie->description = $faker->paragraph(2, true);
            $newMovie->thumb = $faker->imageUrl(640, 480, 'movies');
            $newMovie->release = $faker->date('Y-m-d', '-10 years');
            $genres = ['Action', 'Adventure', 'Comedy', 'Drama', 'Fantasy', 'Sci-Fi'];
            $newMovie->genre = $faker->randomElement($genres);
            $newMovie->save();
        }
    }
}
