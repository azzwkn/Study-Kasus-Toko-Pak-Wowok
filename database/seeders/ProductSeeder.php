<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Indomie Goreng',
            'price' => 3500,
            'stock' => 50,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Aqua 600ml',
            'price' => 4000,
            'stock' => 30,
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'Sabun Cuci',
            'price' => 5000,
            'stock' => 20,
        ]);
    }
}
