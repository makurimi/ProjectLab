<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'password' =>  bcrypt('admin'),
            'gender' => 'male',
            'DoB' => '2000-01-01',
            'country' => 'Indonesia',
            'role' => 'admin',
        ]);
        DB::table('user_datas')->insert([
            'name' => 'member1',
            'email' => 'member@gmail.com',
            'password' => bcrypt('password'),
            'gender' => 'male',
            'DoB' => '2000-01-01',
            'country' => 'Indonesia',
        ]);
    }
}
