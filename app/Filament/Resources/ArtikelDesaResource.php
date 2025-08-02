<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelDesaResource\Pages;
use App\Filament\Resources\ArtikelDesaResource\RelationManagers;
use App\Models\ArtikelDesa;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Textarea, FileUpload, Select, RichEditor, Hidden};
use Filament\Tables\Columns\{TextColumn, ImageColumn, BadgeColumn};
use Illuminate\Support\Str;

class ArtikelDesaResource extends Resource
{
    protected static ?string $model = ArtikelDesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Artikel Desa';
    protected static ?string $pluralModelLabel = 'Artikel Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                DatePicker::make('date')->required()->default(now())->label('Tanggal'),
                RichEditor::make('content')->required()->columnSpanFull(),
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('name')->required()->unique(),
                    ])
                    ->required(),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])->default('draft'),
                TextInput::make('author_name')
                ->label('Author Name')
                ->required()
                ->default('Admin')
                ->hidden(),
                TextInput::make('slug')->disabled()->columnSpanFull()->hidden(),
                FileUpload::make('thumbnail')->image()->directory('articles'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->searchable()->limit(30),
                TextColumn::make('kategori.name')->label('Kategori')->searchable(),
                BadgeColumn::make('status')
                    ->colors([
                        'primary' => 'draft',
                        'success' => 'published',
                    ]),

                // Opsi 1: Menggunakan size() untuk ukuran yang sudah ditentukan
                ImageColumn::make('thumbnail')
                    ->size(120) // Ukuran 120px
                    ->label('Thumbnail')
                    ->defaultImageUrl(asset('storage/articles/default_thumbnail.png')),

                // Atau Opsi 2: Menggunakan width() dan height() untuk kontrol lebih detail
                // ImageColumn::make('thumbnail')
                //     ->width(150)
                //     ->height(100)
                //     ->label('Thumbnail'),

                // Atau Opsi 3: Kombinasi dengan berbagai pengaturan
                // ImageColumn::make('thumbnail')
                //     ->size(100)
                //     ->square() // Membuat gambar persegi
                //     ->label('Thumbnail'),

                // Atau Opsi 4: Dengan pengaturan yang lebih lengkap
                // ImageColumn::make('thumbnail')
                //     ->size(120)
                //     ->extraAttributes(['class' => 'rounded-lg shadow-sm'])
                //     ->defaultImageUrl(url('/images/placeholder.png')) // Gambar default jika kosong
                //     ->label('Thumbnail'),

                TextColumn::make('date')->dateTime('d M Y')->label('Tanggal Kegiatan'),
            ])
            ->defaultSort('date', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikelDesas::route('/'),
            'create' => Pages\CreateArtikelDesa::route('/create'),
            'edit' => Pages\EditArtikelDesa::route('/{record}/edit'),
        ];
    }
}
