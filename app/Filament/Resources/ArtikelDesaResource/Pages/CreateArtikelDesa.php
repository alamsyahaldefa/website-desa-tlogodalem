<?php

namespace App\Filament\Resources\ArtikelDesaResource\Pages;

use App\Filament\Resources\ArtikelDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Galeri;

class CreateArtikelDesa extends CreateRecord
{
    protected static string $resource = ArtikelDesaResource::class;

    protected function afterCreate(): void
    {
        $artikel = $this->record;
        // ✅ 1. Simpan thumbnail ke galeri
        if ($artikel->thumbnail) {
            Galeri::create([
                'artikel_desa_id' => $artikel->id,
                'image_path' => $artikel->thumbnail,
                'caption' => $artikel->title,
            ]);
        }

        $content = $artikel->content;

        // 1. Ambil semua <img ...> tag dari RichEditor
        preg_match_all('/<img[^>]+>/i', $content, $imgTags);

        foreach ($imgTags[0] as $imgTag) {
            // Ambil src
            preg_match('/src="([^"]+)"/i', $imgTag, $srcMatch);
            $src = $srcMatch[1] ?? null;

            // Ambil alt (opsional caption)
            preg_match('/alt="([^"]*)"/i', $imgTag, $altMatch);
            // $caption = $altMatch[1] ?? null;
            $caption = isset($altMatch[1]) ? (string) $altMatch[1] : null;

            if ($src) {
                // Ubah menjadi path relatif dari storage/
                $parsed = parse_url($src);
                $path = ltrim($parsed['path'], '/');

                if (str_starts_with($path, 'storage/')) {
                    $path = substr($path, strlen('storage/'));
                }

                Galeri::create([
                    'artikel_desa_id' => $artikel->id,
                    'image_path' => $path,
                    'caption' => $caption,
                ]);
            }
        }
    }

    // ✅ Method untuk redirect setelah save
    protected function getRedirectUrl(): string
    {
        // return $this->getResource()::getUrl('index');
        return '/dashboard/artikel-desas'; // URL custom
    }

    // ✅ Alternatif: Jika ingin redirect ke halaman view/detail dari record yang baru dibuat
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    // }

    // ✅ Alternatif: Jika ingin redirect ke halaman edit dari record yang baru dibuat
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('edit', ['record' => $this->getRecord()]);
    // }

    // ✅ Alternatif: Jika ingin tetap di halaman create untuk membuat record baru lagi
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('create');
    // }
}