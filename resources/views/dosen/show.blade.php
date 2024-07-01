@extends('layouts.layout')
@section('konten')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-gray-900">
                        <div class="p-4 flex justify-between items-center">
                            <h1 class="text-3xl">
                                Daftar Dosen
                            </h1>
                            <a href="{{ route('dosen.add') }}"
                                class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Tambah
                                Dosen</a>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            NIDN
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama Lengkap
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Program Studi
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-center">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $no => $dosenItem)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                                {{ $no + 1 }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $dosenItem->nidn }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $dosenItem->nama_lengkap }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $dosenItem->program_studi }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex flex-row justify-center">
                                                    <a href="{{ route('dosen.edit', $dosenItem->id) }}"
                                                        class="mr-3 text-sm bg-yellow-400 hover:bg-yellow-600 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Ubah</a>
                                                    <form action="{{ route('dosen.delete', $dosenItem->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit"
                                                            class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Hapus</a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
