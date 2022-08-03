<?php

namespace Database\Seeders\Web;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $categoryOne = new Category([
            'name' => 'Chaquetas',
            'description' => 'Prendas / Chaquetas y similares'
        ]);
        $categoryOne->save();

        $categoryTwo = new Category([
            'name' => 'Busos',
            'description' => 'Prendas / Busos y similares'
        ]);
        $categoryTwo->save();

        $categoryThree = new Category([
            'name' => 'Camisas',
            'description' => 'Prendas / Camisas y similares'
        ]);
        $categoryThree->save();

        $categoryFour = new Category([
            'name' => 'Pantalones',
            'description' => 'Prendas / Pantalones y similares'
        ]);
        $categoryFour->save();

        $categoryFive = new Category([
            'name' => 'Gorros',
            'description' => 'Prendas / Gorros y similares'
        ]);
        $categoryFive->save();

        $categorySixth = new Category([
            'name' => 'Accesorios',
            'description' => 'Accesorios / Accesorios y similares'
        ]);
        $categorySixth->save();
    }

}
