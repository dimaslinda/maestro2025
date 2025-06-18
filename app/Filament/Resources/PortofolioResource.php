<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Portofolio;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PortofolioResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PortofolioResource\RelationManagers;

class PortofolioResource extends Resource
{
    protected static ?string $model = Portofolio::class;

    protected static ?string $navigationIcon = 'heroicon-m-building-office-2';

    protected static ?string $navigationLabel = 'Portofolio';

    protected static ?string $navigationGroup = 'Portofolio Maestro';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('judul')
                            ->live(true)
                            ->label('Judul')
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),
                        TextInput::make('slug')
                            ->readOnly()
                            ->required(),
                        TagsInput::make('kategori')
                            ->label('Kategori')
                            ->separator(',')
                            ->suggestions([
                                'construction',
                                'applicator',
                                'design',
                                'furniture',
                                'commercial',
                                'house',
                                'infrastructure',
                                'auxiliaries'
                            ])
                            ->required(),
                        Textarea::make('alamat')
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('portofolio')
                            ->collection('portofolio')
                            ->label('Portofolio Maestro')
                            ->image()
                            ->required(),
                        SpatieMediaLibraryFileUpload::make('another_portofolio')
                            ->collection('another_portofolio')
                            ->label('Portofolio Lainnya')
                            ->image()
                            ->multiple()
                            ->maxFiles(6)
                            ->required(),
                        Toggle::make('highlight')
                            ->label('Highlight')
                            ->onColor('success')
                            ->offColor('danger'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->label('Judul')
                    ->searchable(),
                // TextColumn::make('slug')->label('Slug')->searchable(),
                // TextColumn::make('kategori')->label('Kategori')->searchable(),
                SpatieMediaLibraryImageColumn::make('portofolio')
                    ->width(100)
                    ->height(100)
                    ->collection('portofolio')
                    ->label('Portofolio Maestro'),
                SpatieMediaLibraryImageColumn::make('another_portofolio')
                    ->width(100)
                    ->height(100)
                    ->collection('another_portofolio'),
                ToggleColumn::make('highlight')
                    ->label('Highlight')
                    ->onColor('success')
                    ->offColor('danger')
                    ->label('Highlight'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Portofolio')
                    ->modalDescription('Apakah Anda yakin ingin menghapus portofolio ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->modalHeading('Hapus Portofolio Terpilih')
                        ->modalDescription('Apakah Anda yakin ingin menghapus portofolio yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                        ->modalSubmitActionLabel('Ya, Hapus Semua')
                        ->modalCancelActionLabel('Batal'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePortofolios::route('/'),
        ];
    }
}
