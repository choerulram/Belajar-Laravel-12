<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // query untk menambah data
        DB::table('tb_product')->insert([
            [
                'product_name' => 'Smart TV',
                'price' => 15000000,
                'description' => 'Ini berupa produk dummy',
                'id_category' => '2',
                'created_at' => now()
            ],
            [
                'product_name' => 'Laptop Gaming',
                'price' => 20000000,
                'description' => 'Ini berupa produk dummy',
                'id_category' => '2',
                'created_at' => now()
            ],
            [
                'product_name' => 'PC Fullset',
                'price' => 50000000,
                'description' => 'Ini berupa produk dummy',
                'id_category' => '2',
                'created_at' => now()
            ],
        ]);
    }
}
