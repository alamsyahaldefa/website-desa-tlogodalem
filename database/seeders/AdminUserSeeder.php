<?php

namespace Database\Seeders;

use App\Models\ProfilDesa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'desatlogodalem@kertek.wonosobo.go.id',
            'password' => Hash::make('admintlogodalem123'),
        ]);

        ProfilDesa::create([
            'jumlah_penduduk' => 1250,
            'jumlah_kepala_keluarga' => 325,
            'jumlah_prestasi_desa' => 15,
            'link_video_profil' => 'https://www.youtube.com/watch?v=6Nyqd-HOSAc',
            'alamat' => 'Ngadisari, Tlogodalem, Kec. Kertek, Kabupaten Wonosobo, Jawa Tengah 56371',
            'email' => 'desatlogodalem@kertek.wonosobo.go.id',
            'no_telp' => '(0286) 321-456',
            'fax' => '(0286) 321-457',
        ]);
    }
}
