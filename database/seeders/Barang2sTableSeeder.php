<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang2s = [
            ['nama_barang' => 'Laptop', 'harga' =>  6000000, 'stok' => 100],
            ['nama_barang' => 'Hp', 'harga' => 4000000, 'stok' => 200],
            ['nama_barang' => 'Komputer', 'harga' => 12000000, 'stok' => 300],
        ];
        // masukkan data ke database
        DB::table('barang2s')->insert($barang2s);
    }
}
