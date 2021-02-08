<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => Str::random(10),
            'description' => Str::random(10),
            'image' => "https://www.heynutritionlady.com/wp-content/uploads/2018/01/winter_vegetable_meal_prep_bowls.jpg",
            'price'=>rand(0,50)
        ]);
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => Str::random(10),
            'description' => Str::random(10),
            'image' => "https://www.heynutritionlady.com/wp-content/uploads/2018/01/winter_vegetable_meal_prep_bowls.jpg",
            'price'=>rand(0,50)
        ]);

    }
}
