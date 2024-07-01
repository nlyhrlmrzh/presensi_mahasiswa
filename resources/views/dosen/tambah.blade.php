@extends('layout')
@section('konten')

<h4>Add Dosen</h4>

<form actions="" method="post">
    <label>NIDN</label>
    <input type="number" name="nim" class="form-control mb-2">
    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" class="form-control mb-2">
    <label>Program Studi</label>
    <input type="text" name="program_studi" class="form-control mb-2">

    <button type="button" class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Add Dosen</button>
</form>

@endsection
    