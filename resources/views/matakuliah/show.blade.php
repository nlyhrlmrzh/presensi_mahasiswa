@extends('layouts.layout')
@section('konten')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-gray-900 bg-gray-200">
                        <div class="p-4 flex">
                            <h1 class="text-3xl">
                                Mata Kuliah
                            </h1>
                        </div>
                        <div class="px-7 py-8 flex justify-center">
                            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                                <thead>
                                    <tr class="border-b">
                                        <th class="text-left p-3 px-5">No</th>
                                        <th class="text-left p-3 px-5">Kode</th>
                                        <th class="text-left p-3 px-5">Mata Kuliah</th>
                                        <th class="text-left p-3 px-5">Dosen Pengampu</th>
                                        <th class="p-3 px-5">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                        <td class="p-3 px-5">1</td>
                                        <td class="p-3 px-5"><input type="text" value="EL20" class="bg-transparent">
                                        </td>
                                        <td class="p-3 px-5"><input type="text" value="Robotika" class="bg-transparent">
                                        </td>
                                        <td class="p-3 px-5"><input type="text" value="Dr. Ihsan Imaduddin, S.Si., M.Si."
                                                class="bg-transparent"></td>
                                        <td class="p-3 px-5 flex justify-end">
                                            <button type="button"
                                                class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button>
                                            <button type="button"
                                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
