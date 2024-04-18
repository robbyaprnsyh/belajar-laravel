<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di web app saya<br>'
        . 'Laravel, emang keren.';
});

//route basic introduce myself
Route::get('/saya', function () {
    return '<h1>Hello world, saya Robby<br></h1>'
        . 'Saya siswa SMK Assalaam Bandung<br>'
        . 'Saya jurusan Rekayasa Perangkat Lunak (RPL)<br>'
        . 'Saya berumur 17 tahun<br>'
        . 'Saya Lahir di Bandung<br>'
        . 'Saya tinggal di Cangkuang Kulon<br>'
        . 'Hobi saya membaca Al-Quran<br>';
});

//route basic to view
Route::get('/animals', function () {
    $king = "lion";
    $hewan = ["Monkey", "Dragonfly", "Tiger", "Butterfly", "Crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('/vegetables', function () {
    $fruit = ["Apple", "Grape", "Starfruit", "Melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

//route parameter
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//route parameter
Route::get('biodata/{nama}/{bb}/{tb}', function ($nama, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if($bmi > 30){
        $ket = "Obesitas";
    } else if($bmi > 25){
        $ket = "Kelebihan";
    } else if($bmi > 18.5){
        $ket = "Ideal";
    } else if($bmi < 18.5){
        $ket = "Kekurangan berat badan";
    }

    return "Nama : $nama<br>" .
        "Berat Badan : $bb kg <br>" .
        "Tinggi Badan : $tb cm <br>" .
        "Nilai BMI : $bmi<br>" .
        "Keterangan : $ket";
});
