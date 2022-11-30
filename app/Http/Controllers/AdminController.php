<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;

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
        return view('admin.input-kk');
    }

    public function create_keluarga(Request $request)
    {
        // dd($request);
        $keluarga = keluarga::create($request->all());
    }
}
