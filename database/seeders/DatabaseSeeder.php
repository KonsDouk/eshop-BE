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

        $photo1 = \App\Models\ProductsPhotos::create([
            'sku'=> 'abc',
            'name' => 'Shirt',
            'description' => 'Black Shirt',
            'price'=> '10',
            'quantity'=> '100',
        ]);

        $photo2 = \App\Models\ProductsPhotos::create([
            'sku'=> 'def',
            'name' => 'Jeans',
            'description' => 'A pair of jeans',
            'price'=> '50',
            'quantity'=> '15',
        ]);

        $photo3 = \App\Models\ProductsPhotos::create([
            'sku'=> 'ghi',
            'name' => 'Dress',
            'description' => 'A Sundress',
            'price'=> '35',
            'quantity'=> '205',
        ]);
        $photo4 = \App\Models\ProductsPhotos::create([
            'sku'=> 'jkl',
            'name' => 'Hat',
            'description' => 'No Fear hat',
            'price'=> '12',
            'quantity'=> '300',
        ]);
    }
}
