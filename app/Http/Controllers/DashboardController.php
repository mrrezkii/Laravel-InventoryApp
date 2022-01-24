<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = $this->getTotalBarang();
        $stokKategori = $this->getStokKategori();
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalBarang' => $totalBarang,
            'stokKategori' => $stokKategori
        ]);
    }

    public function getTotalBarang()
    {
        return DB::table('barang')->count();
    }

    public function getStokKategori()
    {
        return DB::table('barang')
            ->join('kategori', 'kategori.kode_kategori', 'barang.kode_kategori')
            ->select('kategori.nama_kategori', DB::raw('count(barang.kode_kategori) as total'))
            ->groupBy('kategori.nama_kategori')
            ->get();
    }
}
