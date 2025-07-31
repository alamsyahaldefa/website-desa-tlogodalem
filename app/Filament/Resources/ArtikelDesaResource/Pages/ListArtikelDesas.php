<?php

namespace App\Filament\Resources\ArtikelDesaResource\Pages;

use App\Filament\Resources\ArtikelDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtikelDesas extends ListRecords
{
    protected static string $resource = ArtikelDesaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
