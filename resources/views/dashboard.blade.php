<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard Akademik
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <div class="text-sm text-gray-500">Total Mahasiswa</div>
                    <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $totalMahasiswa ?? '—' }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <div class="text-sm text-gray-500">Total Dosen</div>
                    <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $totalDosen ?? '—' }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <div class="text-sm text-gray-500">Mata Kuliah Aktif</div>
                    <div class="mt-2 text-2xl font-bold text-gray-800 dark:text-gray-100">{{ $totalMatkul ?? '—' }}</div>
                </div>
            </div>

            <!-- Search / Actions -->
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow mb-6">
                <form method="GET" action="" class="flex gap-2">
                    <input type="search" name="q" placeholder="Cari mahasiswa (nama / NIM)"
                        class="w-full px-3 py-2 rounded border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded">Cari</button>
                </form>
            </div>

            <!-- Students table -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-4">Daftar Mahasiswa</h3>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-900">
                                <tr>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">NIM</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Nama</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Program Studi</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Angkatan</th>
                                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @php
                                    $sample = [
                                        ['nim' => '2021001', 'nama' => 'Budi Santoso', 'prodi' => 'Teknik Informatika', 'angkatan' => '2021'],
                                        ['nim' => '2021002', 'nama' => 'Siti Aminah', 'prodi' => 'Sistem Informasi', 'angkatan' => '2020'],
                                        ['nim' => '2021003', 'nama' => 'Agus Wijaya', 'prodi' => 'Teknik Elektro', 'angkatan' => '2022'],
                                    ];
                                @endphp

                                @if(isset($mahasiswa) && count($mahasiswa) > 0)
                                    @foreach($mahasiswa as $m)
                                        <tr>
                                            <td class="px-4 py-2 text-sm">{{ $m->nim ?? $m['nim'] ?? '-' }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m->nama ?? $m['nama'] ?? '-' }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m->prodi ?? $m['prodi'] ?? '-' }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m->angkatan ?? $m['angkatan'] ?? '-' }}</td>
                                            <td class="px-4 py-2 text-sm">
                                                <a href="#" class="text-indigo-600 hover:underline">Lihat</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    @foreach($sample as $m)
                                        <tr>
                                            <td class="px-4 py-2 text-sm">{{ $m['nim'] }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m['nama'] }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m['prodi'] }}</td>
                                            <td class="px-4 py-2 text-sm">{{ $m['angkatan'] }}</td>
                                            <td class="px-4 py-2 text-sm">
                                                <a href="#" class="text-indigo-600 hover:underline">Lihat</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
