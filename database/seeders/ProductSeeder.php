<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::factory()->count(100)->create();
        $products = [
            ['name' => 'Corned Beef', 'description' => 'Premium canned corned beef', 'price' => 120.00, 'category_id' => 1],
            ['name' => 'Fresh Milk', 'description' => '1L full cream milk', 'price' => 90.00, 'category_id' => 2],
            ['name' => 'Instant Noodles', 'description' => 'Spicy chicken flavored instant noodles', 'price' => 15.00, 'category_id' => 3],
            ['name' => 'Frozen Chicken', 'description' => '1kg frozen whole chicken', 'price' => 180.00, 'category_id' => 4],
            ['name' => 'Orange Juice', 'description' => '1L pure orange juice', 'price' => 75.00, 'category_id' => 5],
            ['name' => 'Whiskey', 'description' => '750ml premium whiskey', 'price' => 1500.00, 'category_id' => 6],
            ['name' => 'Potato Chips', 'description' => 'Classic salted potato chips', 'price' => 50.00, 'category_id' => 7],
            ['name' => 'Dishwashing Liquid', 'description' => '500ml lemon-scented dishwashing liquid', 'price' => 60.00, 'category_id' => 8],
            ['name' => 'Notebook', 'description' => '100 pages ruled notebook', 'price' => 40.00, 'category_id' => 9],
        ];

        foreach ($products as $product) {
            \App\Models\Product::create($product);
        }

    }
}



