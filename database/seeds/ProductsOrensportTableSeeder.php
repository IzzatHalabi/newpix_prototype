<?php

use App\ProductOrensport;
use Illuminate\Database\Seeder;

class ProductsOrensportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOrensport::create([
            'name' => 'ORENSPORT QUICK DRY 36',
            'slug' => 'orensport-quick-dry-36',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]); 

        ProductOrensport::create([
            'name' => 'ORENSPORT QUICK DRY 37',
            'slug' => 'orensport-quick-dry-37',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
        
        ProductOrensport::create([
            'name' => 'ORENSPORT QUICK DRY 53',
            'slug' => 'orensport-quick-dry-53',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductOrensport::create([
            'name' => 'ORENSPORT QUICK DRY 57',
            'slug' => 'orensport-quick-dry-57',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);

        ProductOrensport::create([
            'name' => 'ORENSPORT QUICK DRY 58',
            'slug' => 'aorensport-quick-dry-58',
            'details' => 'S M L XL XXL',
            'price' => 50,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
        ]);
    }
}
