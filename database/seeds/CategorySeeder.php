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
            'name' => 'Tops'
        ]);

        Category::create([
            'name' => 'Jackets'
        ]);

        Category::create([
            'name' => 'Suits'
        ]);

        Category::create([
            'name' => 'Trousers'
        ]);

        Category::create([
            'name' => 'Sportswear'
        ]);

        Schema::enableForeignKeyConstraints();
    }
}