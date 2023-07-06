<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $order1 = \App\Models\Customer::create([
            'fName'=> 'Kostas',
            'lName' => 'Papadopoulos',
            'phone' => '1234509876',
            'cellphone'=> '6912345678',
            'address'=> 'Adamantiou Korai',
            'streetNo'=> '21',
            'isActive'=> true,
        ]);

        $customer2 = \App\Models\Customer::create([
            'fName'=> 'Giannis',
            'lName' => 'Petrou',
            'phone' => '2310 55112',
            'cellphone'=> '6911223344',
            'address'=> 'Aristotelous',
            'streetNo'=> '5',
            'isActive'=> true,
        ]);

        $customer3 = \App\Models\Customer::create([
            'fName'=> 'Christos',
            'lName' => 'Adamidis',
            'phone' => '21055642',
            'cellphone'=> '6999887766',
            'address'=> 'Agiou Hlia',
            'streetNo'=> '45A',
            'isActive'=> false,
        ]);
    }
}
