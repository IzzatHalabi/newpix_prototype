<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ItemSeeder::class,
            CartSeeder::class
        ]);
    }
}
