<?php

namespace App\Filament\Resources\ArtikelDesaResource\Pages;

use App\Filament\Resources\ArtikelDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Galeri;

class EditArtikelDesa extends EditRecord
{
    protected static string $resource = ArtikelDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $this->extractImagesToGallery($data['content']);

        return $data;
    }

    protected function extractImagesToGallery(string $content): void
    {
        // Ambil ID artikel (jika sedang edit)
        $artikelId = $this->record->id ?? null;

        // Hapus gambar lama (jika edit)
        if ($artikelId) {
            Galeri::where('artikel_desa_id', $artikelId)->delete();
        }

        // ✅ 1. Simpan thumbnail ke galeri
        $artikel = $this->record;
        if ($artikel->thumbnail) {
            Galeri::create([
                'artikel_desa_id' => $artikel->id,
                'image_path' => $artikel->thumbnail,
                'caption' => $artikel->title,
            ]);
        }

        preg_match_all('/<img[^>]+>/i', $content, $imgTags);
        foreach ($imgTags[0] as $imgTag) {
            // Ambil src
            preg_match('/src="([^"]+)"/i', $imgTag, $srcMatch);
            $src = $srcMatch[1] ?? null;

            // Ambil alt
            preg_match('/alt="([^"]*)"/i', $imgTag, $altMatch);
            $caption = isset($altMatch[1]) ? $altMatch[1] : null;

            if ($src) {
                $parsed = parse_url($src);
                $path = isset($parsed['path']) ? ltrim($parsed['path'], '/') : null;

                if ($path && str_starts_with($path, 'storage/')) {
                    $path = substr($path, strlen('storage/'));
                }

                Galeri::create([
                    'artikel_desa_id' => $artikelId ?? 0,
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

    // ✅ Alternatif: Jika ingin redirect ke halaman view/detail
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    // }

    // ✅ Alternatif: Jika ingin tetap di halaman edit yang sama
    // protected function getRedirectUrl(): string
    // {
    //     return $this->getResource()::getUrl('edit', ['record' => $this->getRecord()]);
    // }
}