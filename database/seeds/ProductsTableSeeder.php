<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'ARORA COTTON T-SHIRT',
            'slug' => 'arora-cotton-tshirt',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        Product::create([
            'name' => 'ARORA HONEYCOMB POLO',
            'slug' => 'arora-honeycomb-polo',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        Product::create([
            'name' => 'ARORA QUICK DRY PLAIN T-SHIRT',
            'slug' => 'arora-quick-dry-plain-tshirt',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'ARORA SUBLIMATION LADIES',
            'slug' => 'arora-sublimation-ladies',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'ARORA SUBLIMATION POLO',
            'slug' => 'arora-sublimation-polo',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'ORENSPORT QUICK DRY 36',
            'slug' => 'orensport-quick-dry-36',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        Product::create([
            'name' => 'ORENSPORT QUICK DRY 37',
            'slug' => 'orensport-quick-dry-37',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        Product::create([
            'name' => 'ORENSPORT QUICK DRY 53',
            'slug' => 'orensport-quick-dry-53',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'ORENSPORT QUICK DRY 57',
            'slug' => 'orensport-quick-dry-57',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'ORENSPORT QUICK DRY 58',
            'slug' => 'aorensport-quick-dry-58',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'PANZER JERSEY 1601',
            'slug' => 'panzer-jersey-1601',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        Product::create([
            'name' => 'PANZER JERSEY 1602',
            'slug' => 'panzer-jersey-1602',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        Product::create([
            'name' => 'PANZER JERSEY 1603',
            'slug' => 'panzer-jersey-1603',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'PANZER MICROFIBER BASIC ADULT',
            'slug' => 'panzer-microfiber-basic-adult',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        Product::create([
            'name' => 'PANZER MICROFIBER BASIC KID',
            'slug' => 'panzer-microfiber-basic-kid',
            'details' => 'S M L XL XXL',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
