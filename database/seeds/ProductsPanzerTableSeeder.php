<?php

use App\ProductPanzer;
use Illuminate\Database\Seeder;

class ProductsPanzerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductPanzer::create([
            'name' => 'PANZER JERSEY 1601',
            'slug' => 'panzer-jersey-1601',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        ProductPanzer::create([
            'name' => 'PANZER JERSEY 1602',
            'slug' => 'panzer-jersey-1602',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        ProductPanzer::create([
            'name' => 'PANZER JERSEY 1603',
            'slug' => 'panzer-jersey-1603',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductPanzer::create([
            'name' => 'PANZER MICROFIBER BASIC ADULT',
            'slug' => 'panzer-microfiber-basic-adult',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductPanzer::create([
            'name' => 'PANZER MICROFIBER BASIC KID',
            'slug' => 'panzer-microfiber-basic-kid',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
