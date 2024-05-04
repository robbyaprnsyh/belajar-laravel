<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis = [
            ['barang_id' => 1, 'pembeli_id' => 1, 'jumlah' => 50, 'tanggal' => '2021/01/21'],
            ['barang_id' => 1, 'pembeli_id' => 1, 'jumlah' => 60, 'tanggal' => '2022/02/22'],
            ['barang_id' => 2, 'pembeli_id' => 2, 'jumlah' => 70, 'tanggal' => '2023/03/23'],
            ['barang_id' => 2, 'pembeli_id' => 2, 'jumlah' => 30, 'tanggal' => '2024/04/24'],
            ['barang_id' => 3, 'pembeli_id' => 3, 'jumlah' => 40, 'tanggal' => '2020/02/20'],
            ['barang_id' => 3, 'pembeli_id' => 3, 'jumlah' => 20, 'tanggal' => '2019/09/19'],
        ];
        // masukkan data ke database
        DB::table('transaksis')->insert($transaksis);
    }
}
