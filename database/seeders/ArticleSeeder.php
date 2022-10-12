<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = FakerFactory::create();
        

       for ($i=0; $i < 26; $i++){
        Article::create([
            'title' => $faker->sentence(),
            'subtitle' => $faker->sentence(),
            'content' => $faker->text($maxNbChars = 600),
            'category_id' => Category::inRandomOrder()->first()->id
        ]);
       }
    }
}
