@extends('layouts.layout')
@section('konten')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-gray-900">
                        <div class="p-4 flex justify-center items-center">
                            <h1 class="text-3xl">
                                {{ $view_type }} Dosen
                            </h1>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-6 py-3">
                            <form action="{{ route('dosen.submitAdd') }}" method="post" class="flex flex-col gap-5">
                                @csrf
                                <div class="flex flex-col gap-2">
                                    <label for="nidn"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                                    <input type="nidn" id="nidn" name="nidn"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="NIDN" value="{{ $dosenById->nidn ?? '' }}" required />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="nama_lengkap"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Lengkap</label>
                                    <input type="nama_lengkap" id="nama_lengkap" name="nama_lengkap"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Nama Lengkap" value="{{ $dosenById->nama_lengkap ?? '' }}" required />
                                </div>
                                <div class="flex flex-col gap-2">
                                    <label for="program_studi"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                                        Studi</label>
                                    <input type="program_studi" id="program_studi" name="program_studi"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Program Studi" value="{{ $dosenById->program_studi ?? '' }}"
                                        required />
                                </div>
                                <div class="flex flex-row justify-end gap-5">
                                    <a href="{{ route('dosen') }}"
                                        class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Kembali</a>
                                    <button type="submit"
                                        class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">{{ $view_type }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
