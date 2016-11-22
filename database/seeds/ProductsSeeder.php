<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
    		'id' => '1',
    		'name' => 'Product 1',
    		'mineral' => 'Mineral 1',
    	]);
    }
}
