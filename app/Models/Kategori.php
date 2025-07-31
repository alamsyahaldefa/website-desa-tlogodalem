<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable = ['name'];

    public function artikelDesas()
    {
        return $this->hasMany(ArtikelDesa::class);
    }
}