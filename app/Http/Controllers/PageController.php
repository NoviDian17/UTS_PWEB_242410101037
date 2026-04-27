<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
    $username = $request->username;

    return redirect('/dashboard?username=' . $username);
    }

    public function dashboard(Request $request)
    {
    $username = $request->username;
    $nama = $request->nama;

    return view('dashboard', compact('username', 'nama'));
    }

    public function profile(Request $request)
    {
    $username = $request->username;
    $nama = $request->nama;
    return view('profile', compact('username', 'nama'));
    }

    public function ceo(Request $request)
    {
    $username = $request->username;
    $nama = $request->nama;

    return view('ceo', compact('username', 'nama'));
    }

    public function pengelolaan(Request $request)
    {
    $username = $request->username;
    $nama = $request->nama;

        $anggur = [
    [
        "produk" => "anggur1.png",
        "nama" => "Anggur Merah",
        "stok" => 50,
        "harga" => 40000,
        "status" => "Tersedia",
        "unit" => "Gr",
    ],
    [
        "produk" => "anggur2.png",
        "nama" => "Anggur Ungu",
        "stok" => 60,
        "harga" => 30000,
        "status" => "Tersedia",
        "unit" => "Gr",
    ],
    [
        "produk" => "anggur3.png",
        "nama" => "Anggur Muscat",
        "stok" => 15,
        "harga" => 50000,
        "status" => "Menipis",
        "unit" => "Gr",
    ],
    [
        "produk" => "anggur4.png",
        "nama" => "Anggur Cotton Candy",
        "stok" => 5,
        "harga" => 75000,
        "status" => "Hampir Habis",
        "unit" => "Gr",
    ],
    [
        "produk" => "anggur5.png",
        "nama" => "Anggur Moon Drops",
        "stok" => 20,
        "harga" => 80000,
        "status" => "Menipis",
        "unit" => "Gr",
    ],
    [
        "produk" => "anggur6.png",
        "nama" => "Anggur Glenora",
        "stok" => 4,
        "harga" => 100000,
        "status" => "Hampir Habis",
        "unit" => "Gr",
    ],

];

        return view('pengelolaan', compact('username', 'anggur', 'nama'));
    }
}
