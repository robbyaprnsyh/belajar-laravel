<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'barang_id', 'pembeli_id', 'jumlah', 'tanggal'];
	public $timestamps = true;

    public function barang()
    {
        return $this->belongsTo(Barang2::class, 'barang_id');
    }
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id');
    }
}
