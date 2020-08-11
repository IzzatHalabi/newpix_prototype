<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Item::truncate();

        // Arora
        Item::create([
            'name' => 'ARORA COTTON T-SHIRT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 30.00,
            'image_url' => 'images/PRODUCTS/ARORA COTTON T-SHIRT.png',
            'category_id' => 1
        ]);

        Item::create([
            'name' => 'ARORA HONEYCOMB POLO',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 30.00,
            'image_url' => 'images/PRODUCTS/ARORA HONEYCOMB POLO.png',
            'category_id' => 1
        ]);

        Item::create([
            'name' => 'ARORA QUICK DRY PLAIN T-SHIRT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 35.00,
            'image_url' => 'images/PRODUCTS/ARORA QUICK DRY PLAIN T-SHIRT.png',
            'category_id' => 1
        ]);

        Item::create([
            'name' => 'ARORA SUBLIMATION LADIES',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 25.00,
            'image_url' => 'images/PRODUCTS/ARORA SUBLIMATION LADIES.png',
            'category_id' => 1
        ]);

        Item::create([
            'name' => 'ARORA SUBLIMATION POLO',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 25.00,
            'image_url' => 'images/PRODUCTS/ARORA SUBLIMATION POLO.png',
            'category_id' => 1
        ]);


        // Orensport
        Item::create([
            'name' => 'ORENSPORT QUICK DRY 36',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 50.00,
            'image_url' => 'images/PRODUCTS/ORENSPORT QUICK DRY 36.png',
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'ORENSPORT QUICK DRY 37',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 52.00,
            'image_url' => 'images/PRODUCTS/ORENSPORT QUICK DRY 37.png',
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'ORENSPORT QUICK DRY 53',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 52.00,
            'image_url' => 'images/PRODUCTS/ORENSPORT QUICK DRY 53.png',
            'category_id' => 2
        ]);

        Item::create([
            'name' => 'ORENSPORT QUICK DRY 57',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 50.00,
            'image_url' => 'images/PRODUCTS/ORENSPORT QUICK DRY 57.png',
            'category_id' => 2
        ]);


        // Panzer
        Item::create([
            'name' => 'PANZER JERSEY 1601',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 60.00,
            'image_url' => 'images/PRODUCTS/PANZER JERSEY 1601.png',
            'category_id' => 3
        ]);

        Item::create([
            'name' => 'PANZER JERSEY 1602',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 60.00,
            'image_url' => 'images/PRODUCTS/PANZER JERSEY 1602.png',
            'category_id' => 3
        ]);

        Item::create([
            'name' => 'PANZER JERSEY 1603',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 60.00,
            'image_url' => 'images/PRODUCTS/PANZER JERSEY 1603.png',
            'category_id' => 3
        ]);

        Item::create([
            'name' => 'PANZER MICROFIBER BASIC ADULT',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 55.00,
            'image_url' => 'images/PRODUCTS/PANZER MICROFIBER BASIC ADULT.png',
            'category_id' => 3
        ]);

        Item::create([
            'name' => 'PANZER MICROFIBER BASIC KID',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => 53.00,
            'image_url' => 'images/PRODUCTS/PANZER MICROFIBER BASIC KID.png',
            'category_id' => 3
        ]);

        Schema::enableForeignKeyConstraints();
    }
}