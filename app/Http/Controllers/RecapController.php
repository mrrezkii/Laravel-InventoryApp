<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class RecapController extends Controller
{

    public function index()
    {
        return view('pages.recap.index', [
            'title' => 'Rekap',
            'active' => 'recap',
        ]);
    }

    public function data()
    {
        $model = DB::table('rekap')->get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return (string)view('pages.recap.action', ['model' => $model]);
            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create()
    {
        $dataBarang = DB::table('barang')->get();
        return view('pages.recap.create', [
            'title' => 'Rekap',
            'active' => 'recap',
            'dataBarang' => $dataBarang
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_barang' => 'required|max:255',
            'tanggal_rekap' => 'required',
            'stok_awal_rekap' => 'required|max:255',
            'stok_akhir_rekap' => 'required|max:255',
        ]);

        if ($request->stok_awal_rekap > $request->stok_akhir) {
            $validateData['kode_status_rekap'] = 'INB';
        } else {
            $validateData['kode_status_rekap'] = 'OUB';
        }

        DB::table('rekap')->insert($validateData);

        return redirect('/recap')->with('info', "Rekap berhasil ditambah");
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
