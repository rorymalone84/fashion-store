<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SizeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            SizeSeeder::class
        ]);

        User::factory()->create([
            'name' => 'admin',
            'password' => 'password',
            'email' => 'admin@example.com',
            'phone' => '01224 312645',
            'address' => '61 Ivanhoe Road',
            'postcode' => 'AB5 10DB',
            'city' => 'aberdeen',
        ])->assignRole('admin');
    }
}
