<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::create(['category_id' => '1', 'size_description' => 'The sizes for dresses', 'size_value' => 5]);
        Size::create(['category_id' => '2', 'size_description' => 'The sizes for trousers', 'size_value' => 8]);
    }
}
