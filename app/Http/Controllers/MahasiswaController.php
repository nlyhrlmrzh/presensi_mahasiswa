<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function show()
    {
        return view('mahasiswa.show');
    }
    function add()
    {
        return view('mahasiswa.add');
    }
}
