<?php

namespace App\Filament\Resources\ProfilDesaResource\Pages;

use App\Filament\Resources\ProfilDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfilDesa extends EditRecord
{
    protected static string $resource = ProfilDesaResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->record->getKey()]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Tambahkan logic manipulasi data di sini jika perlu
        return $data;
    }
}
