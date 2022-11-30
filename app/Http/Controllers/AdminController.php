<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use App\Models\Keluarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }

    public function data()
    {
        $keluarga = Keluarga::all();
        return view('admin.data-kk', ['keluarga' => $keluarga]);
    }

    public function input()
    {
        $rayon = Rayon::all();
        return view('admin.input-kk', ['rayon' => $rayon]);
    }

    public function create_keluarga(Request $request)
    {
        // dd($request);
        $keluarga = keluarga::create($request->all());
        if ($keluarga) {
            Session::flash('status', 'success');
            Session::flash('message', 'Data keluarga berhasil ditambah!');

        }
        return redirect('/data-kk');
    }
}
