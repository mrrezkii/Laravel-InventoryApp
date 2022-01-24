<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class GoodsController extends Controller
{

    public function index()
    {
        return view('pages.goods.index', [
            'title' => 'Barang',
            'active' => 'goods',
        ]);
    }

    public function data()
    {
        $model = DB::table('barang')->get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return (string)view('pages.goods.action', ['model' => $model]);
            })
            ->addColumn('harga_barang', function ($model) {
                return "Rp " . number_format($model->harga_barang, 2, ',', '.');
            })
            ->addColumn('gambar_barang', function ($model) {
                return '<img src="' . $model->gambar_barang . '" height="50px">';
            })
            ->addColumn('kadaluarsa_barang', function ($model) {
                return Carbon::parse($model->kadaluarsa_barang)->format('d-m-y');
            })
            ->rawColumns(['action', 'gambar_barang'])
            ->toJson();
    }

    public function create()
    {
        $dataKategori = DB::table('kategori')->get();
        return view('pages.goods.create', [
            'title' => 'Tambah Barang',
            'active' => 'goods',
            'dataKategori' => $dataKategori
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255',
            'kode_kategori' => 'required|max:255',
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required|max:255',
            'gambar_barang' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'deskripsi_barang' => 'required',
            'kadaluarsa_barang' => 'required|max:255',
        ]);

        $gambarBarangFile = $request->file('gambar_barang');
        $gambarBarangName = time() . "_" . $gambarBarangFile->getClientOriginalName();
        $gambarBarangPath = "media/barang";

        $gambarBarangFile->move($gambarBarangPath, $gambarBarangName);

        $validateData['gambar_barang'] = "/$gambarBarangPath/$gambarBarangName";

        DB::table('barang')->insert($validateData);

        return redirect('/goods')->with('info', "Barang berhasil ditambah");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
