<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
                ['name' => "COMBOS", 'name_fr'=>"COMBOS"],
                ['name' => "SALADS", 'name_fr'=>"SALADES"],
                ['name' => "MAIN DISHES ", 'name_fr'=>"PLATS PRINCIPAUX"],
                ['name' => "SIDE DISHES", 'name_fr'=>"LES À-CÔTÉS"],
                ['name' => "BEVERAGES", 'name_fr'=>"BOISSONS"],
            ]
        );
    }
}
