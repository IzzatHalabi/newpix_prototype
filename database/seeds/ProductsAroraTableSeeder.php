<?php

use App\ProductArora;
use Illuminate\Database\Seeder;

class ProductsAroraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductArora::create([
            'name' => 'ARORA COTTON T-SHIRT',
            'slug' => 'arora-cotton-tshirt',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        ProductArora::create([
            'name' => 'ARORA HONEYCOMB POLO',
            'slug' => 'arora-honeycomb-polo',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        ProductArora::create([
            'name' => 'ARORA QUICK DRY PLAIN T-SHIRT',
            'slug' => 'arora-quick-dry-plain-tshirt',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductArora::create([
            'name' => 'ARORA SUBLIMATION LADIES',
            'slug' => 'arora-sublimation-ladies',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductArora::create([
            'name' => 'ARORA SUBLIMATION POLO',
            'slug' => 'arora-sublimation-polo',
            'details' => 'S M L XL XXL',
            'price' => 30,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
