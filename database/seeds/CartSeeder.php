<?php

use App\Cart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CartSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Cart::truncate();

        Cart::create([
            'user_id' => 1,
            'item_id' => 2,
            'quantity' => 3
        ]);
        
        Cart::create([
            'user_id' => 1,
            'item_id' => 5,
            'quantity' => 1
        ]);

        Schema::enableForeignKeyConstraints();
    }
}