<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'Alvin', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345671', 'email' => 'alvin@gmail.com'],
            ['nama' => 'Abdu', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345672', 'email' => 'abdu@gmail.com'],
            ['nama' => 'Radin', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345673', 'email' => 'radin@gmail.com'],
            ['nama' => 'Ali', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345674', 'email' => 'ali@gmail.com'],
            ['nama' => 'Surya', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345675', 'email' => 'surya@gmail.com'],
            ['nama' => 'Zahran', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345676', 'email' => 'zahran@gmail.com'],
            ['nama' => 'Wandi', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345677', 'email' => 'Wandi@gmail.com'],
            ['nama' => 'Rasya', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345678', 'email' => 'rasya@gmail.com'],
            ['nama' => 'Zidni', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345679', 'email' => 'zidni@gmail.com'],
            ['nama' => 'Diki', 'jenis_kelamin' => 'Laki-laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '0812345670', 'email' => 'diki@gmail.com']
        ];
        // masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
