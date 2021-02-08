<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();

        // boy (6)
        Student::create([
            'name' => 'Izzat Halabi',
            'official_id' => 25107
        ]);

        Student::create([
            'name' => 'Ikhmal',
            'official_id' => 25035
        ]);

        Student::create([
            'name' => 'Syakil',
            'official_id' => 25098
        ]);

        Student::create([
            'name' => 'Latif',
            'official_id' => 25099
        ]);

        Student::create([
            'name' => 'Faiz',
            'official_id' => 25025
        ]);

        Student::create([
            'name' => 'Hanzallah',
            'official_id' => 25515
        ]);

        // girl (4)
        Student::create([
            'name' => 'Nurul',
            'official_id' => 25001
        ]);

        Student::create([
            'name' => 'Atikah',
            'official_id' => 25011
        ]);

        Student::create([
            'name' => 'Dayana',
            'official_id' => 25209
        ]);

        Student::create([
            'name' => 'Siti',
            'official_id' => 25222
        ]);

        Schema::enableForeignKeyConstraints();
    }
}