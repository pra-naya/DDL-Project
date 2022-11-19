<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Listing::create([
            'name' => 'Ram Thapa',
            'email' => 'ram.thapa@gamil.com',
            'address' => 'sifal',
            'image' => 'image',
        ]);

        Listing::create([
            'name' => 'shyam Thapa',
            'email' => 'shyam.thapa@gamil.com',
            'address' => 'sifal',
            'image' => 'image',
        ]);
    }
}
