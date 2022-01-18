<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'databarangs';
    protected $primaryKey = 'kode_barang';
    protected $keyType = 'string';
    protected $fillable = ['kode_barang', 'nama_barang', 'kode_kategori', 'deskripsi_barang', 'harga', 'stock', 'masa_pakai'];
}
