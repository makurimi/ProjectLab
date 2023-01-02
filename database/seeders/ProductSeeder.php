<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_infos')->insert([
            'category_id' => 1,
            'image' => 'shirt1.jpg',
            'name' => 'Baju bagus',
            'detail' => 'Baju ini membuat anda lebih tampan dan menarik',
            'price' => 1000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 1,
            'image' => 'shirt2.jpg',
            'name' => 'Baju yang bagus 2.0',
            'detail' => 'Baju ini membuat anda lebih tampan dan menarik lebih dari baju bagus',
            'price' => 2000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 1,
            'image' => 'shirt3.jpg',
            'name' => 'Baju yang cukup bagus',
            'detail' => 'Baju ini membuat anda merasa kece dan oke',
            'price' => 1000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 1,
            'image' => 'shirt4.jpg',
            'name' => 'Baju yang mahal',
            'detail' => 'Baju ini membuat anda merasa kaya karena kebanyakan uang',
            'price' => 5000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 2,
            'image' => 'pants1.jpg',
            'name' => 'Celana ajaib',
            'detail' => 'Celana ini bisa membuat bagian bawah tubuh anda tidak terlihat',
            'price' => 1000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 2,
            'image' => 'pants2.jfif',
            'name' => 'Celana millenial',
            'detail' => 'Celana terbaru yang sangat millenial banget',
            'price' => 1230000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 2,
            'image' => 'pants3.jfif',
            'name' => 'Celana oldskul',
            'detail' => 'Celana ini membuat anda terkesan dewasa dan keren',
            'price' => 1000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 3,
            'image' => 'shoes1.jfif',
            'name' => 'Sepatu hype',
            'detail' => 'Sepatu ini adalah sepatu yang membuat anda dikagumi oleh anak di pinggir jalan',
            'price' => 6000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 3,
            'image' => 'shoes2.jfif',
            'name' => 'Sepatu Warna Warni',
            'detail' => 'Sepatu ini membuat anda terkesan lebih muda dan ceria',
            'price' => 5000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 4,
            'image' => 'asc1.jfif',
            'name' => 'Aksesoris Hippie',
            'detail' => 'Paket akesoris ini akan membuat anda dilihat sebagai orang yang santuy',
            'price' => 350000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 4,
            'image' => 'asc2.jfif',
            'name' => 'Tas mewah',
            'detail' => 'Tas ini membuat anda dinilai sebagai orang berduit karena harganya yang sangat mahal',
            'price' => 50000000
        ]);
        DB::table('product_infos')->insert([
            'category_id' => 4,
            'image' => 'asc3.jfif',
            'name' => 'Tangan - Tangananan',
            'detail' => 'Tangan-tanganan ini membuat anda dapat menangani seluruh hal yang harus ditangani dengan tangan-tanganan ini.',
            'price' => 1000000
        ]);
    }
}
