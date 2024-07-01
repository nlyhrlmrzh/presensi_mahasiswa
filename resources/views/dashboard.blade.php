@extends('layouts.layout')
@section('konten')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Selamat datang di Dashboard Presensi Mahasiswa! Di sini, Anda dapat mengelola dan memantau kehadiran mahasiswa dengan mudah dan efisien.') }}
                </div>
            </div>
        </div>
    </div>
@endsection