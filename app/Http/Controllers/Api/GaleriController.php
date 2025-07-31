<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GaleriResource;
use App\Models\Galeri;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    //
    public function index(Request $request)
    {
        // $filter_kategori = $request->input('kategori');

        // $query = Galeri::query();

        // if ($filter_kategori) {
        //     // Lakukan filter berdasarkan kategori.name
        //     $query->whereHas('artikel.kategori', function($q) use ($filter_kategori) {
        //         $q->where('name', $filter_kategori);
        //     });
        // }

        // $artikels = $query->paginate(perPage: 1);

        // // Mengembalikan response JSON yang terbungkus dengan paginasi
        // return GaleriResource::collection($artikels);

        return GaleriResource::collection(Galeri::all());
    }
}
