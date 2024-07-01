<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertemuanController extends Controller
{
    public function show()
    {
        return view('pertemuan.show');
    }
}
