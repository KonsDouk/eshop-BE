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

        $order1 = \App\Models\Orders::create([
            'customer_id' => 1,
            'items' => json_encode(
                "'Shirt': {
                    qty: 2,
                    color: 'Black',
                    size: 'L'
                },
                'Hat': {
                    qty: 1,
                    color: 'White',
                    size: 'M'
                }"
            ),
            'total_price'=> 50,
            'payment_method'=> 'Credit Card',
            'state'=> 'Completed',
            'delivery_address'=> 'Mikinon 5A'

        ]);

        $order2 = \App\Models\Orders::create([
            'customer_id' => 2,
            'items' => json_encode(
                "'Jeans': {
                    qty: 1,
                    color: 'Blue',
                    size: 'L'
                }"
            ),
            'total_price'=> 40,
            'payment_method'=> 'Debit Card',
            'state'=> 'Pending',
            'delivery_address'=> 'Xarilaou 99'
        ]);

        $order3 = \App\Models\Orders::create([
            'customer_id' => 3,
            'items' => json_encode(
                "'Hat': {
                    qty: 2,
                    color: 'Black',
                    size: 'L'
                },
                'Dress': {
                    qty: 1,
                    color: 'White',
                    size: 'M'
                },
                'Jeans': {
                    qty: 1,
                    color: 'Red',
                    size: 'S'
                }"
            ),
            'total_price'=> 70,
            'payment_method'=> 'Αντικαταβολή',
            'state'=> 'Canceled',
            'delivery_address'=> 'Agiou Fanouriou 12'
        ]);

        $order4 = \App\Models\Orders::create([
            'customer_id' => 1,
            'items' => json_encode(
                "'Hat': {
                    qty: 1,
                    color: 'White',
                    size: 'L'
                },
                'Shirt': {
                    qty: 1,
                    color: 'White',
                    size: 'M'
                },
                'Jeans': {
                    qty: 1,
                    color: 'Black',
                    size: 'S'
                }"
            ),
            'total_price'=> 60,
            'payment_method'=> 'Τραπεζική κατάθεση',
            'state'=> 'Completed',
            'delivery_address'=> 'Mikinon 5A'
        ]);
    }
}
