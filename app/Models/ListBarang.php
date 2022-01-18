<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListBarang extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'listbarangs';
    protected $primaryKey = 'kode_list';
    protected $keyType = 'string';
    protected $fillable = ['kode_list', 'kode_barang', 'jumlah_barangbeli', 'total_harga'];
}
