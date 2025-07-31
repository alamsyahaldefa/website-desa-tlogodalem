<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ArtikelDesa;
use App\Http\Resources\ArtikelDesaResource;  // Resource untuk format response
use Illuminate\Http\Request;

class ArtikelDesaController extends Controller
{
    /**
     * Menampilkan daftar artikel desa dengan pagination.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Ambil artikel dengan pagination
        $artikels = ArtikelDesa::orderBy('date', 'desc')->where('status', '=', 'published')->paginate(perPage: 9); // 9 artikel per halaman

        // Mengembalikan response JSON yang terbungkus dengan paginasi
        return ArtikelDesaResource::collection($artikels);
    }

    /**
     * Menampilkan artikel berdasarkan slug.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $artikel = ArtikelDesa::where('slug', $slug)->firstOrFail();

        // Mengembalikan response JSON menggunakan resource
        return response()->json(new ArtikelDesaResource($artikel));
    }
}
