<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.index', [
            'title' => 'Akun',
            'active' => 'account',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|max:255',
        ]);

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/account')->with('info', 'Berhasil Memperbarui Akun');
    }
}
