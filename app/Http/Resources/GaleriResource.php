<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GaleriResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'image_path' => '/storage/' . $this->image_path,
            'url_artikel' => '/artikel/' . $this->artikel->slug,
            'kategori' => $this->artikel->kategori->name, // Assumsi 'kategori' adalah relasi
            'caption' => $this->caption != null ? $this->caption : $this->artikel->title,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
