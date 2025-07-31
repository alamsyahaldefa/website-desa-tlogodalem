<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $fillable = [
        'jumlah_penduduk',
        'jumlah_kepala_keluarga',
        'jumlah_prestasi_desa',
        'link_video_profil',
        'alamat',
        'email',
        'no_telp',
        'fax',
        'facebook',
        'instagram',
        'youtube',
        'whatsapp',
    ];

    public function GetEmbedUrlVideoProfil()
    {
        if (str_contains($this->link_video_profil, 'watch?v=')) {
            return str_replace('watch?v=', 'embed/', $this->link_video_profil);
        }
        else if (str_contains($this->link_video_profil, 'youtu.be/')) {
            return str_replace('youtu.be/', 'youtube.com/embed/', $this->link_video_profil);
        }

        return $this->link_video_profil;
    }
}
