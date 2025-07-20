<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Men T-Shirt',
                'category' => 'Clothes',
                'price' => 499,
                'image' => 'https://via.placeholder.com/200x200.png?text=T-Shirt',
                'description' => 'Comfortable cotton t-shirt for daily wear.',
            ],
            [
                'name' => 'Fresh Tomatoes',
                'category' => 'Vegetables',
                'price' => 99,
                'image' => 'https://via.placeholder.com/200x200.png?text=Tomatoes',
                'description' => 'Farm fresh organic tomatoes.',
            ],
            [
                'name' => 'Potato Chips',
                'category' => 'Snacks',
                'price' => 30,
                'image' => 'https://via.placeholder.com/200x200.png?text=Chips',
                'description' => 'Crunchy salted potato chips.',
            ],
            [
                'name' => 'Plastic Chair',
                'category' => 'Furniture',
                'price' => 799,
                'image' => 'https://via.placeholder.com/200x200.png?text=Chair',
                'description' => 'Durable plastic chair for home or garden.',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
