<?php

namespace Database\Seeders;

use Database\Seeders\Web\CategorySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(CategorySeeder::class);
    }

}
