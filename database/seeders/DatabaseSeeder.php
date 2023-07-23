<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

        DB::table('customers')->where('id', 1)->update([
            'password'=> Hash::make('password1'),
        ]);
        DB::table('customers')->where('id', 2)->update([
            'password'=> Hash::make('password2'),
        ]);
        DB::table('customers')->where('id', 3)->update([
            'password'=> Hash::make('password3'),
        ]);

    }
}
