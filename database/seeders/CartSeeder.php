<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'user_id' => 2,
            'product_id' => 1,
            'transaction_id' => 1,
            'quantity' => 2
        ]);
        DB::table('carts')->insert([
            'user_id' => 2,
            'product_id' => 2,
            'transaction_id' => 1,
            'quantity' => 1
        ]);
        DB::table('carts')->insert([
            'user_id' => 2,
            'product_id' => 3,
            'transaction_id' => 1,
            'quantity' => 1
        ]);
    }
}
