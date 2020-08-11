<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();

        Category::create([
            'name' => 'Arora'
        ]);

        Category::create([
            'name' => 'Orensport'
        ]);

        Category::create([
            'name' => 'Panzer'
        ]);

        Schema::enableForeignKeyConstraints();
    }
}