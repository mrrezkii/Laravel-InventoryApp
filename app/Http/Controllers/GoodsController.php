<?php

namespace App\Http\Controllers;

use App\Models\Barang;
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
