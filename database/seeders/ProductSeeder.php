<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Bf2042';
        $product->quantityInStock = 12;
        $product->price = 1000000;
        $product->category_id = 1;
        $product->image = 'xyz';
        $product->featured = true;
        $product->save();
    }
}
