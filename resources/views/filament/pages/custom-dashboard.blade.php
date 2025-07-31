<x-filament-panels::page>
    <div class="space-y-6">
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-gray-800 rounded-xl p-6 shadow-md">
            <h1 class="text-3xl font-bold">Selamat Datang, Admin!</h1>
            <p class="mt-2 text-lg">Anda sedang berada di halaman dashboard <strong>Website Desa Tlogodalem</strong>.</p>
            <p class="text-sm opacity-90">Gunakan menu navigasi di samping untuk mengelola konten website desa
                {{-- , data penduduk, dan informasi publik. --}}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            {{-- <x-filament::card>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Data Penduduk</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Kelola data warga desa secara mudah dan aman.</p>
            </x-filament::card> --}}

            <x-filament::card>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Berita & Pengumuman</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Tambahkan informasi terkini untuk warga desa.</p>
            </x-filament::card>

            {{-- <x-filament::card>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Layanan Publik</h2>
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Atur surat keterangan, pelayanan RT/RW, dan lainnya.</p>
            </x-filament::card> --}}
        </div>
    </div>
</x-filament-panels::page>
