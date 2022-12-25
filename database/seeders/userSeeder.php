<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_datas')->insert([
            'name' => 'admin',
            'email' => 'admin@barbatos.shop',
            'password' => 'admin',
            'gender' => 'male',
            'DoB' => '2000-01-01',
            'country' => 'Indonesia',
            'role' => 'admin',
        ]);
    }
}
