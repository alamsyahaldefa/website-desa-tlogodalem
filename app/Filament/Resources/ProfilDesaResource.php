<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilDesaResource\Pages;
use App\Filament\Resources\ProfilDesaResource\RelationManagers;
use App\Models\ProfilDesa;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfilDesaResource extends Resource
{
    protected static ?string $model = ProfilDesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'Profil Desa';
    protected static ?string $pluralModelLabel = 'Profil Desa';

    public static function form(Form $form): Form
    {
        return $form->schema([

            Section::make('Data Umum')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('jumlah_penduduk')
                            ->numeric()
                            ->minValue(0)
                            ->rules(['integer', 'min:0']),
                        TextInput::make('jumlah_kepala_keluarga')
                            ->numeric()
                            ->minValue(0)
                            ->rules(['integer', 'min:0']),
                        TextInput::make('jumlah_prestasi_desa')
                            ->numeric()
                            ->minValue(0)
                            ->rules(['integer', 'min:0']),
                        TextInput::make('link_video_profil'),
                    ]),
                    Textarea::make('alamat'),
                ])
                ->columns(1)
                ->collapsible(),

            Section::make('Kontak')
                ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('email')->email(),
                        TextInput::make('no_telp')->maxLength(20),
                        TextInput::make('fax')->maxLength(20),
                        TextInput::make('whatsapp')
                            ->numeric()
                            ->minValue(0)
                            ->rules(['min:0'])->maxLength(20),
                    ]),
                ])
                ->columns(1)
                ->collapsed(), // Optional: default collapsed
                // ->collapsible(), // Optional: allow collapse toggle

            Section::make('Media Sosial')
                ->schema([
                    Grid::make(3)->schema([
                        TextInput::make('facebook'),
                        TextInput::make('instagram'),
                        TextInput::make('youtube'),
                    ]),
                ])
                ->columns(1)
                ->collapsed(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getNavigationUrl(): string
    {
        $record = ProfilDesa::first();

        // Kalau record belum ada, arahkan ke halaman kosong atau #
        return $record
            ? static::getUrl('edit', ['record' => $record->id])
            : '#';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfilDesas::route('/'),
            // 'create' => Pages\CreateProfilDesa::route('/create'),
            'edit' => Pages\EditProfilDesa::route('/{record}/edit'),
        ];
    }
}
