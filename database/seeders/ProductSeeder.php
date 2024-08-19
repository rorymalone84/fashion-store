<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name' => 'Blue Dress', 'description' => '', 'price' => 25, 'image' => null, 'category_id' =>  1]);
        Product::create(['name' => 'Torn faded Jeans', 'description' => '', 'price' => 45, 'image' => null, 'category_id' =>  2]);
    }
}
