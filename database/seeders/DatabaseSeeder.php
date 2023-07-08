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
            'product_id'=> '1',
            'title' => 'Shirt Photo',
            'src' => 'images/1_img1.jpg',
            'alt'=> 'Shirt Photo',
        ]);

        $photo2 = \App\Models\ProductsPhotos::create([
            'product_id'=> '2',
            'title' => 'Jeans Photo',
            'src' => 'images/1_img2.jpg',
            'alt'=> 'Jeans Photo',
        ]);

        $photo3 = \App\Models\ProductsPhotos::create([
            'product_id'=> '3',
            'title' => 'Dress Photo',
            'src' => 'images/1_img3.jpg',
            'alt'=> 'Dress Photo',
        ]);
        $photo4 = \App\Models\ProductsPhotos::create([
            'product_id'=> '4',
            'title' => 'Hat Photo',
            'src' => 'images/1_img4.jpg',
            'alt'=> 'Hat Photo',
        ]);
    }
}
