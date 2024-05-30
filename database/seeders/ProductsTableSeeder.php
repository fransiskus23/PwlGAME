<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Diamond Package 1',
            'description' => '100 Diamonds',
            'price' => 1.99,
            'stock' => 100,
        ]);

        DB::table('products')->insert([
            'name' => 'Diamond Package 2',
            'description' => '500 Diamonds',
            'price' => 9.99,
            'stock' => 50,
        ]);

        // Tambahkan produk lain sesuai kebutuhan
    }
}
