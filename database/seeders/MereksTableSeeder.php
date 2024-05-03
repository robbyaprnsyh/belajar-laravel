<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MereksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mereks = [
            ['nama_merek' => 'Honda'],
            ['nama_merek' => 'Kawasaki'],
            ['nama_merek' => 'Yamaha'],
        ];
        // masukkan data ke database
        DB::table('mereks')->insert($mereks);
    }
}
