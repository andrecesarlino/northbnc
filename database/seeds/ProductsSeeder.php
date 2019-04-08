<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        factory(App\Product::class, 10)->create();
    }
}
