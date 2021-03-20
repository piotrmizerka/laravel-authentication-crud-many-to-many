<?php

namespace Database\Seeders;

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
        $product = new \App\Models\Product([
            'name' => 'Volkswagen Polo',
            'description' => '10 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Skoda Kamiq',
            'description' => '8 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Volkswagen T-Roc',
            'description' => '3 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Audi A3',
            'description' => '4 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Audi Q3',
            'description' => 'New'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Skoda Citigo',
            'description' => '10 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Toyota Yaris',
            'description' => '10 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Toyota Corolla',
            'description' => '15 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Mercedes',
            'description' => '10 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'BMW',
            'description' => '10 year, used'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name' => 'Porsche',
            'description' => '10 year, used'
        ]);
        $product->save();
    }
}
