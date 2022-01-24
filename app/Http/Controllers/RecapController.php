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
