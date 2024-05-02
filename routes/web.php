<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Barang;
use App\Models\Siswa;
use App\Models\Pengguna;
use App\Models\Telepon;

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

//route optional parameter -> di tandai dengan ?
Route::get('myname/{nama?}', function ($nama = "Abdu") {
    return "my name is $nama";
});


//menampilkan data dari database
Route::get('/testpost', function () {
    $data = Post::all();

    return view('tampil_post', compact('data'));
    // return $data;
});

//menampilkan data dari database
Route::get('/testbarang', function () {
    $data = Barang::all();

    return view('tampil_barang', compact('data'));
    // return $barang;
});

//menampilkan data dari database
Route::get('/siswa', function () {
    // // menampilkan semua data
    $data = Siswa::all();

    // // menampilkan berdasarkan id
    // $data = Siswa::find(6);

    // // menampilkan berdasarkan jenis kelamin
    // $data = Siswa::where('jenis_kelamin', 'like', '%perempuan%')->get();

    // // mengubah data
    // $data = Siswa::find(9);
    // $data->nama = "Entin";
    // $data->jenis_kelamin = "Perempuan";
    // $data->alamat = "Cibaduyut";
    // $data->email = "entin@gmail.com";
    // $data->save();

    // // menambahkan data
    // $data = new Siswa;
    // $data->nama = "Titin";
    // $data->jenis_kelamin = "Perempuan";
    // $data->alamat = "Cibaduyut";
    // $data->agama = "Buddha";
    // $data->telepon = "0812345687";
    // $data->email = "titin@gmail.com";
    // $data->save();

    return view('tampil_siswa', compact('data'));
    // return $data;
});

//menampilkan data dari database
Route::get('/pengguna', function () {
    $data = Pengguna::all();

    return view('tampil_pengguna', compact('data'));
    // return $barang;
});

//menampilkan data dari database
Route::get('/telepon', function () {
    $data = Telepon::all();

    return view('tampil_telepon', compact('data'));
    // return $barang;
});

