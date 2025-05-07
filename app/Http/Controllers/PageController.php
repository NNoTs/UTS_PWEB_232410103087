<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController
{

    public function login(Request $request)
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        if ($request->has('username')) {
            $username = $request->input('username');
            session(['username' => $username]);
        }
        return view('dashboard');
    }

    public function pengelolaan()
    {
        $produk = [
            ['nama' => 'Chocochips', 'kategori' => 'Coklat'],
            ['nama' => 'Dark Chocolate', 'kategori' => 'Coklat'],
            ['nama' => 'White Chocolate', 'kategori' => 'Coklat'],
        ];

        return view('pengelolaan', compact('produk'));
    }

    public function profile()
    {
        return view('profile');
    }
}
