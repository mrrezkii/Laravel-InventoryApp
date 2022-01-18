<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'kategories';
    protected $primaryKey = 'kode_barang';
    protected $keyType = 'string';
    protected $fillable = ['kode_kategori', 'nama_kategori'];

}
