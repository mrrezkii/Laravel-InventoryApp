<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $model = Barang::all();
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
        dd('create');
    }

    public function store(Request $request)
    {
        //
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
