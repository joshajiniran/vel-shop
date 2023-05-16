<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Apple Macbook Pro 16',
                'details' => 'Apple M1 Pro, 16 GPU, 16GB, 512GB SSD',
                'description' => "Supercharged by M2 Pro or M2 Max, MacBook Pro takes its power and efficiency further than ever. It delivers exceptional performance whether it’s plugged in or not, and now has even longer battery life. Combined with a stunning Liquid Retina XDR display and all the ports you need",
                'brand' => 'Apple',
                'price' => 1999,
                'shipping_cost' => 199,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Samsung Galaxy Book2 Pro',
                'details' => '13.3 inch, 8GB, DDR4 SDRAM, 256GB SSD',
                'description' => "A PC so powerful, you’ll want to take it with you wherever you go. And you can! At less than 2 pounds, this is our thinnest and lightest laptop yet.",
                'brand' => 'Samsung',
                'price' => 949.99,
                'shipping_cost' => 49.99,
                'image_path' => 'storage/product2.png'
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
