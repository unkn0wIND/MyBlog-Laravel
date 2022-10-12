<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['DevWeb', 'DevFramework', 'SecuritéWeb', 'SécuritéRéseau'];
        

        for ($i=0; $i < count($categories); $i++){
         Category::create([
            'label' => $categories[$i]
         ]);
        }
    }
    
}
