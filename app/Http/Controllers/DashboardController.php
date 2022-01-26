<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = $this->getTotalBarang();
        $dataInbound = $this->getInbound();
        $dataOutbound = $this->getOutbound();
        $stokKategori = $this->getStokKategori();
        return view('pages.dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'totalBarang' => $totalBarang,
            'dataInbound' => $dataInbound,
            'dataOutbound' => $dataOutbound,
            'stokKategori' => $stokKategori
        ]);
    }

    public function getTotalBarang()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->count();
    }

    public function getInbound()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->where('kode_status_rekap', '=', 'INB')
            ->count();
    }

    public function getOutbound()
    {
        $date = Carbon::today()->subDays(7);
        return DB::table('rekap')
            ->where('tanggal_rekap', '>=', $date)
            ->where('kode_status_rekap', '=', 'OUB')
            ->count();
    }

    public function getStokKategori()
    {
        return DB::table('barang')
            ->join('kategori', 'kategori.kode_kategori', 'barang.kode_kategori')
            ->join('rekap', 'rekap.kode_barang', 'barang.kode_barang')
            ->join('status_rekap', 'status_rekap.kode_status_rekap', 'rekap.kode_status_rekap')
            ->select('kategori.nama_kategori', DB::raw('count(barang.kode_kategori) as total'), 'status_rekap.nama_status_rekap')
            ->groupBy('kategori.nama_kategori', 'barang.kode_kategori', 'rekap.kode_status_rekap')
            ->get();
    }
}
