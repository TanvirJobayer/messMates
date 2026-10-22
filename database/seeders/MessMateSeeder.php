<?php

namespace Database\Seeders;

use App\Models\messMate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessMateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        messMate::create([
            'name' => 'TJ',
            'email' => 'tj@gmail.com',
            'phone' => '013478376',
            'district' => 'Narail',
            'status' => 'Unemployed',
            'age' => 29,
        ]);
        messMate::create([
            'name' => 'Rifat',
            'email' => 'rifat@gmail.com',
            'phone' => '0177346784',
            'district' => 'Sherpur',
            'status' => '',
            'age' => 28,
        ]);
        messMate::create([
            'name' => 'Biplob',
            'email' => 'biplob@gmail.com',
            'phone' => '0175486754',
            'district' => 'Manikganz',
            'status' => 'Employed',
            'age' => 27,
        ]);
        messMate::create([
            'name' => 'Ashik',
            'email' => 'ashik@gmail.com',
            'phone' => '0184867545',
            'district' => 'Pabna',
            'status' => 'Employed',
            'age' => 27,
        ]);
        messMate::create([
            'name' => 'Mahabub',
            'email' => 'mahabub@gmail.com',
            'phone' => '018467345',
            'district' => 'Pabna',
            'status' => 'Private Tution',
            'age' => 28,
        ]);
    }
}
