<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'Vario', 'jumlah' => 100, 'tanggal_produksi' => '2020/02/20', 'merek_id' => 1],
            ['nama_produk' => 'Beat', 'jumlah' => 200, 'tanggal_produksi' => '2021/01/21', 'merek_id' => 1],
            ['nama_produk' => 'Zx25R', 'jumlah' => 20, 'tanggal_produksi' => '2023/03/23', 'merek_id' => 2],
            ['nama_produk' => 'Zx10R', 'jumlah' => 50, 'tanggal_produksi' => '2022/02/22', 'merek_id' => 2],
            ['nama_produk' => 'Aerox', 'jumlah' => 150, 'tanggal_produksi' => '2019/09/29', 'merek_id' => 3],
            ['nama_produk' => 'Nmax', 'jumlah' => 170, 'tanggal_produksi' => '2018/08/28', 'merek_id' => 3],
        ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);

    }
}
