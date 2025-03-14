<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            ['name' => 'Coca Cola', 'category' => 'food-beverage', 'price' => 10.00],
            ['name' => 'Lipstick Maybelline', 'category' => 'beauty-health', 'price' => 50.00],
            ['name' => 'Detergen Rinso', 'category' => 'home-care', 'price' => 15.00],
            ['name' => 'Popok MamyPoko', 'category' => 'baby-kid', 'price' => 25.00],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
