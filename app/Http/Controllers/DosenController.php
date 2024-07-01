<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    function show()
    {
        $dosen = Dosen::get();

        return view('dosen.show', compact('dosen'));
    }
    function add()
    {
        return view('dosen.add')->with([
            'view_type' => 'Tambah',
        ]);
    }
    function submitAdd(Request $payload)
    {
        $dosen = new Dosen();
        $dosen->nidn = $payload->nidn;
        $dosen->nama_lengkap = $payload->nama_lengkap;
        $dosen->program_studi = $payload->program_studi;
        $dosen->save();

        return redirect()->route('dosen');
    }
    function edit($id)
    {
        $dosenById = dosen::find($id);
        if (!$dosenById) {
            return redirect()->route('dosen.add');
        } else {
            return view('dosen.edit')->with([
                'view_type' => 'Ubah',
                'dosenById' => $dosenById
            ]);
        }
    }
    function submitEdit(Request $payload, $id)
    {
        $dosenById = dosen::find($id);
        $dosenById->nidn = $payload->nidn;
        $dosenById->nama_lengkap = $payload->nama_lengkap;
        $dosenById->program_studi = $payload->program_studi;
        $dosenById->update();

        return redirect()->route('dosen');
    }
    function delete($id)
    {
        $dosenById = dosen::find($id) ;
        $dosenById->delete();
        return redirect()->route('dosen');
    }
}
