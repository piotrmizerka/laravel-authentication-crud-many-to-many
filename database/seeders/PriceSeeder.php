<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = new Price([
            'value' => 50000
        ]);
        $price->save();
        $price = new Price([
            'value' => 60000
        ]);
        $price->save();
        $price = new Price([
            'value' => 70000
        ]);
        $price->save();
        $price = new Price([
            'value' => 80000
        ]);
        $price->save();
        $price = new Price([
            'value' => 90000
        ]);
        $price->save();
    }
}
