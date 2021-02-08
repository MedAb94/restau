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
        //ctegory 1: Combos
        DB::table('products')->insert([
            ['category_id' => 1,
                'name' => "Half BBQ chicken with plantain",
                'name_fr' => "Demi poulet avec plantain",
                'price' => 17.95
            ],
            ['category_id' => 1,
                'name' => "Half BBQ chicken with rice & plantain",
                'name_fr' => "Demi poulet avec riz et plantain",
                'price' => 17.50
            ],
            ['category_id' => 1,
                'name' => "Chicken Kabab with rice & plantain",
                'name_fr' => "Brochette de poulet avec riz et plantain",
                'price' => 18.50
            ],
            ['category_id' => 1,
                'name' => "Beef Kabab with rice & plantain",
                'name_fr' => "Brochette de beauf avec riz et plantain",
                'price' => 18.50
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with rice",
                'name_fr' => "Quart de poulet avec riz",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with rice & plantain",
                'name_fr' => "Quart de poulet avec riz et plantain",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with salad",
                'name_fr' => "Quart de poulet avec salade",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with fries",
                'name_fr' => "Quart de poulet avec frites",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with cassava",
                'name_fr' => "Quart de poulet avec manioc",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Half BBQ chicken with cassava",
                'name_fr' => "Demi poulet avec manioc",
                'price' => 15.95
            ],
            ['category_id' => 1,
                'name' => "Half BBQ chicken with cassava",
                'name_fr' => "Demi poulet avec manioc",
                'price' => 17.50
            ],
            ['category_id' => 1,
                'name' => "Quarter BBQ chicken with cassava & plantain",
                'name_fr' => "Quart de poulet avec manioc et plantain",
                'price' => 17.50
            ],
            ['category_id' => 1,
                'name' => "Half BBQ chicken with fries & salad",
                'name_fr' => "Demi poulet avec frites et salade",
                'price' => 17.50
            ],
            ['category_id' => 1,
                'name' => "Half BBQ chicken with couscous",
                'name_fr' => "Demi poulet avec couscous bœuf",
                'price' => 17.50
            ],
            ['category_id' => 1,
                'name' => "Beef Combo",
                'name_fr' => "Combo de bœuf",
                'price' => 19.95
            ],
            ['category_id' => 1,
                'name' => "Shrimp Combo",
                'name_fr' => "Combo de crevettes",
                'price' => 19.95
            ],
            ['category_id' => 1,
                'name' => "Goat Combo",
                'name_fr' => "Combo de chèvre",
                'price' => 19.95
            ],

        ]);
        //ctegory 2: Salads
        DB::table('products')->insert([
            ['category_id' => 2,
                'name' => "House Salad",
                'name_fr' => " Salade maison",
                'price' => 8.95
            ],
            ['category_id' => 2,
                'name' => "Chef Salad",
                'name_fr' => "Salade du chef",
                'price' => 9.95
            ],
            ['category_id' => 2,
                'name' => "Potato Salad",
                'name_fr' => " Salade de pommes de terre Niçoise",
                'price' => 9.95
            ],
            ['category_id' => 2,
                'name' => "Caesar Salad",
                'name_fr' => "Salade César ",
                'price' => 9.95
            ],

        ]);
        //ctegory 3: Side dishes
        DB::table('products')->insert([
            ['category_id' => 3,
                'name' => "Rice topped with Carrot and Vegetable",
                'name_fr' => "Riz rouge légumes divers",
                'price' => 8.95
            ],
            ['category_id' => 3,
                'name' => "Rice with Mixed Vegetables",
                'name_fr' => "Riz aux beure Macédoine de légumes",
                'price' => 8.95
            ],
            ['category_id' => 3,
                'name' => "Fried Plantains",
                'name_fr' => " Plantains frites",
                'price' => 7.95
            ],
            ['category_id' => 3,
                'name' => "Sweet Potato Fries",
                'name_fr' => "Frites de patates douces",
                'price' => 8.95
            ],
            ['category_id' => 3,
                'name' => "Casava Couscous",
                'name_fr' => " Couscous de Manioc",
                'price' => 8.00
            ],
            ['category_id' => 3,
                'name' => "Mixed Vegetables",
                'name_fr' => "Macédoine de légumes",
                'price' => 9.95
            ],
            ['category_id' => 3,
                'name' => "Single Skewer",
                'name_fr' => "Une brochette",
                'price' => 8.00
            ],
        ]);
        //ctegory 4: main dishes
        DB::table('products')->insert([
            ['category_id' => 4,
                'name' => "Half BBQ Chicken",
                'name_fr' => "Demi poulet",
                'price' => 10.95
            ],
            ['category_id' => 4,
                'name' => "Whole BBQ Chicken",
                'name_fr' => "Poulet entier",
                'price' => 18.95
            ],
            ['category_id' => 4,
                'name' => "Whole Fish",
                'name_fr' => "Poisson entier",
                'price' => 25.00
            ],
            ['category_id' => 4,
                'name' => "Steak",
                'name_fr' => "Steak",
                'price' => 19.95
            ],
            ['category_id' => 4,
                'name' => "Chicken Skewer",
                'name_fr' => "Brochette de poulet",
                'price' => 19.95
            ],
            ['category_id' => 4,
                'name' => "Beef Skewer",
                'name_fr' => "Brochette de bœuf",
                'price' => 17.95
            ],
            ['category_id' => 4,
                'name' => "Shrimp Skewer",
                'name_fr' => "Brochette de crevettes",
                'price' => 19.95
            ],
            ['category_id' => 4,
                'name' => "Fish Skewer",
                'name_fr' => "Brochette de poisson",
                'price' => 18.95
            ],
            ['category_id' => 4,
                'name' => "Goat Skewer",
                'name_fr' => "Brochette de chèvre",
                'price' => 19.95
            ],
            ['category_id' => 4,
                'name' => "Lamb Skewer ",
                'name_fr' => "Brochette d'agneau",
                'price' => 19.95
            ],
        ]);
        //ctegory 5: BEVERAGES
        DB::table('products')->insert([
            ['category_id' => 5,
                'name' => "Bottled Water",
                'name_fr' => "Eau en bouteille",
                'price' => 1.80
            ],
            ['category_id' => 5,
                'name' => "Ginger",
                'name_fr' => "Gingembre",
                'price' => 4.50
            ],
            ['category_id' => 5,
                'name' => "Bissap Juice",
                'name_fr' => "Saureille jus",
                'price' => 4.50
            ],
            ['category_id' => 5,
                'name' => "Coke",
                'name_fr' => "Coca-Cola",
                'price' => 1.80
            ],
            ['category_id' => 5,
                'name' => "Imported Juice ",
                'name_fr' => "Jus importe",
                'price' => 3.00
            ],
            ['category_id' => 5,
                'name' => "Juice Orange, Mango or Guava",
                'name_fr' => " Jus d’orange, de mangue ou de goyave",
                'price' => 3.00
            ],
        ]);

    }
}
