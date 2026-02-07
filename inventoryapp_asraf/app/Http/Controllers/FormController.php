<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $nama_depan = $request->nama_depan;
        $nama_belakang = $request->nama_belakang;

        return view('welcome', compact('nama_depan','nama_belakang'));
    }
}

