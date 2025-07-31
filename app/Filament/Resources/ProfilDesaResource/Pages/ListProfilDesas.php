<?php

namespace App\Filament\Resources\ProfilDesaResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\ProfilDesa;

class ListProfilDesas extends ListRecords
{
    protected static string $resource = \App\Filament\Resources\ProfilDesaResource::class;

    public function mount(): void
    {
        $record = ProfilDesa::first();

        if ($record) {
            $this->redirect($this->getResource()::getUrl('edit', ['record' => $record->id]));
        } else {
            $this->redirect($this->getResource()::getUrl('create'));
        }
    }
    

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         CreateAction::make(),
    //     ];
    // }
}
