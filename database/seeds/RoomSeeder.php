<?php

use App\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Room::truncate();

        // V1 M
        Room::create([
            'name' => 'V1A-L1-1-1',
            'village' => '1',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V1A-L1-1-2',
            'village' => '1',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V1A-L1-1-3',
            'village' => '1',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V1A-L1-1-4',
            'village' => '1',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V1A-L1-1-5',
            'village' => '1',
            'gender' => 'M'
        ]);


        // V1 F
        Room::create([
            'name' => 'V1D-L1-1-1',
            'village' => '1',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V1D-L1-1-2',
            'village' => '1',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V1D-L1-1-3',
            'village' => '1',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V1D-L1-1-4',
            'village' => '1',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V1D-L1-1-5',
            'village' => '1',
            'gender' => 'F'
        ]);


        // V5 M
        Room::create([
            'name' => 'V5A-L1-1-1',
            'village' => '5',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V5A-L1-1-2',
            'village' => '5',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V5A-L1-1-3',
            'village' => '5',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V5A-L1-1-4',
            'village' => '5',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V5A-L1-1-5',
            'village' => '5',
            'gender' => 'M'
        ]);


        // V5 F
        Room::create([
            'name' => 'V5H-L1-1-1',
            'village' => '5',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V5H-L1-1-2',
            'village' => '5',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V5H-L1-1-3',
            'village' => '5',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V5H-L1-1-4',
            'village' => '5',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'V5H-L1-1-5',
            'village' => '5',
            'gender' => 'F'
        ]);


        // V6
        Room::create([
            'name' => 'V6D-L1-1-1',
            'village' => '6',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V6D-L1-1-2',
            'village' => '6',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V6D-L1-1-3',
            'village' => '6',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V6D-L1-1-4',
            'village' => '6',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'V6D-L1-1-5',
            'village' => '6',
            'gender' => 'M'
        ]);


        // SIBC M
        Room::create([
            'name' => 'SIBC Block A L1 Room 1',
            'village' => 'sibc',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'SIBC Block A L1 Room 2',
            'village' => 'sibc',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'SIBC Block A L1 Room 3',
            'village' => 'sibc',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'SIBC Block A L1 Room 4',
            'village' => 'sibc',
            'gender' => 'M'
        ]);

        Room::create([
            'name' => 'SIBC Block A L1 Room 5',
            'village' => 'sibc',
            'gender' => 'M'
        ]);


        // SIBC F
        Room::create([
            'name' => 'SIBC Block D L1 Room 1',
            'village' => 'sibc',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'SIBC Block D L1 Room 2',
            'village' => 'sibc',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'SIBC Block D L1 Room 3',
            'village' => 'sibc',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'SIBC Block D L1 Room 4',
            'village' => 'sibc',
            'gender' => 'F'
        ]);

        Room::create([
            'name' => 'SIBC Block D L1 Room 5',
            'village' => 'sibc',
            'gender' => 'F'
        ]);

        Schema::enableForeignKeyConstraints();
    }
}