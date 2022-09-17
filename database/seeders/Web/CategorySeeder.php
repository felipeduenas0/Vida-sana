<?php

namespace Database\Seeders\Web;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $categoryOne = new Category([
            'name' => 'Salud',
            'description' => 'Productos - Salud'
        ]);
        $categoryOne->save();

        $categoryTwo = new Category([
            'name' => 'Deporte',
            'description' => 'Productos - Deporte'
        ]);
        $categoryTwo->save();

        $categoryThree = new Category([
            'name' => 'Alimentos',
            'description' => 'Productos - Alimentos'
        ]);
        $categoryThree->save();
    }

}
