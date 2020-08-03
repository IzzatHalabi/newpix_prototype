<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Item::truncate();

        Item::create([
            'name' => 'Jacket 1',
            'description' => 'info',
            'price' => 20.00,
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'Jacket 2',
            'description' => 'info',
            'price' => 30.05,
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'Jacket 3',
            'description' => 'info',
            'price' => 33.00,
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'Trousers 1',
            'description' => 'info',
            'price' => 20.50,
            'category_id' => 4
        ]);

        Item::create([
            'name' => 'Trousers 2',
            'description' => 'info',
            'price' => 20.11,
            'category_id' => 4
        ]);

        Schema::enableForeignKeyConstraints();
    }
}