<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerekController;
use App\Models\Barang2;
use App\Models\Barang;
use App\Models\Merek;
use App\Models\Pembeli;
use App\Models\Pengguna;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Siswa;
use App\Models\Telepon;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;


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
Route::get('products/{name}', function ($name) {
    return "produk: $name";
});

//route parameter
Route::get('biodata/{nama}/{bb}/{tb}', function ($nama, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } else if ($bmi > 25) {
        $ket = "Kelebihan";
    } else if ($bmi > 18.5) {
        $ket = "Ideal";
    } else if ($bmi < 18.5) {
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
});

//menampilkan data dari database
Route::get('/telepon', function () {
    $data = Telepon::all();

    return view('tampil_telepon', compact('data'));
});

//menampilkan data dari database
Route::get('/merek', function () {
    $data = Merek::all();

    return view('tampil_merek', compact('data'));
});

//menampilkan data dari database
Route::get('/produk', function () {
    $data = Produk::all();

    return view('tampil_produk', compact('data'));
});

//menampilkan data dari database
Route::get('/pembeli', function () {
    $data = Pembeli::all();

    return view('tampil_pembeli', compact('data'));
});

//menampilkan data dari database
Route::get('/barang2', function () {
    $data = Barang2::all();

    return view('tampil_barang2', compact('data'));
});

//menampilkan data dari database
Route::get('/transaksi', function () {
    $data = Transaksi::all();

    return view('tampil_transaksi', compact('data'));
});

//menampilkan data menjadi web menggunakan controller
Route::get('/produk', [ProdukController::class, 'menampilkan']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);

//menampilkan data menjadi web menggunakan controller
Route::get('/post', [PostController::class, 'menampilkan']);
Route::get('/post/{id}', [PostController::class, 'show']);

//menampilkan data menjadi web menggunakan controller
Route::get('/merek', [MerekController::class, 'menampilkan']);
Route::get('/merek/{id}', [MerekController::class, 'show']);

// Route Auth
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Crud Brand
use App\Http\Controllers\BrandController;
Route::resource('brand', BrandController::class);

// Crud Product
use App\Http\Controllers\ProductController;
Route::resource('product', ProductController::class);