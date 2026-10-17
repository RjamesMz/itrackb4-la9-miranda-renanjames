<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medicine;

class MedicineSeeder extends Seeder
{
    public function run(): void
    {
        Medicine::create([
            'name' => 'Paracetamol',
            'stock' => 100,
            'expiry_date' => '2027-03-15',
            'type' => 'Tablet',
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Amoxicillin',
            'stock' => 50,
            'expiry_date' => '2027-11-20',
            'type' => 'Capsule',
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Losartan',
            'stock' => 10,
            'expiry_date' => '2027-12-25',
            'type' => 'Tablet',
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Cetirizine',
            'stock' => 20,
            'expiry_date' => '2027-09-30',
            'type' => 'Tablet',
            'is_available' => true,
        ]);

        Medicine::create([
            'name' => 'Ibuprofen',
            'stock' => null,
            'expiry_date' => '2028-02-28',
            'type' => 'Tablet',
            'is_available' => false,
        ]);
    }
}
