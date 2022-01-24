<?php

namespace App\Http\Controllers;

use App\Models\DonorNotes;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.category.index', [
            'title' => 'Kategori',
            'active' => 'category',
        ]);
    }

    public function data()
    {
        $model = Kategori::all();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                return (string)view('pages.category.action', ['model' => $model]);
            })
            ->rawColumns(['action'])
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
        $data = DB::table('kategori')->where('kode_kategori', '=', $id)->first();
        return view('pages.category.edit', [
            'title' => 'Ubah Kategori',
            'active' => 'category',
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'kode_kategori' => 'required|max:255',
            'nama_kategori' => 'required|max:255',
        ]);

        DB::table('kategori')->where('id_kategori', '=', $id)->update($validateData);

        return redirect('/category')->with('info', "Kategori berhasil diperbarui");
    }

    public function destroy($id)
    {
        //
    }
}
