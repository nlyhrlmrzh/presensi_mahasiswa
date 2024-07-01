<x-app-layout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div class="text-gray-900 bg-gray-200">
              <div class="p-4 flex justify-between items-center">
                <h1 class="text-3xl">
                  List Dosen
                </h1>
                <button type="button" href="{{ route('dosen.tambah') }}" class="text-sm bg-green-500 hover:bg-green-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Add Dosen</button>
              </div>
              <div class="px-7 py-4">
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                  <thead>
                    <tr class="border-b">
                      <th class="text-left p-3 px-5">No</th>
                      <th class="text-left p-3 px-5">NIDN</th>
                      <th class="text-left p-3 px-5">Nama Lengkap</th>
                      <th class="text-left p-3 px-5">Program Studi</th>
                      <th class="p-3 px-5">Actions</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-app-layout> 