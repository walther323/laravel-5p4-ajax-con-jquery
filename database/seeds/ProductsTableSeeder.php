<?php

//se adiciona la siguiente linea de codigo
use App\Product;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Se crearan 50 productos
        factory(Product::class, 50)->create();
    }
}
