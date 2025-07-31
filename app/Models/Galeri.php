<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    //
    protected $fillable = ['artikel_desa_id', 'image_path', 'caption'];

    public function artikel()
    {
        return $this->belongsTo(ArtikelDesa::class, 'artikel_desa_id');
    }
}