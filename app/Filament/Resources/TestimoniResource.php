<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Testimoni;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TestimoniResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\TestimoniResource\RelationManagers;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';

    protected static ?string $navigationLabel = 'Testimoni Maestro';

    protected static ?string $navigationGroup = 'Beranda';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Testimoni')
                    ->required(),
                TextInput::make('project')
                    ->label('Nama Project')
                    ->required(),
                RichEditor::make('testimoni')
                    ->label('Testimoni')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('profile')
                    ->collection('profile')
                    ->image()
                    ->disk('gcs')
                    ->imageEditor()
                    ->circleCropper()
                    ->required()
                    ->label('Profil'),
                SpatieMediaLibraryFileUpload::make('testimonial')
                    ->collection('testimonial')
                    ->label('Sampul Testimoni')
                    ->disk('gcs')
                    ->panelAspectRatio('2:1')
                    ->imageEditor()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Testimoni')
                    ->searchable(),
                TextColumn::make('project')
                    ->label('Judul Project')
                    ->searchable(),
                TextColumn::make('testimoni')
                    ->label('Testimoni')
                    ->html()
                    ->limit(50)
                    ->searchable(),
                SpatieMediaLibraryImageColumn::make('profile')
                    ->width(100)
                    ->height(100)
                    ->circular()
                    ->collection('profile')
                    ->label('Profil'),
                SpatieMediaLibraryImageColumn::make('testimonial')
                    ->width(100)
                    ->height(100)
                    ->collection('testimonial')
                    ->label('Sampul Testimoni'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Testimoni')
                    ->modalDescription('Apakah Anda yakin ingin menghapus testimoni ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalSubmitActionLabel('Ya, Hapus')
                    ->modalCancelActionLabel('Batal'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation()
                        ->modalHeading('Hapus Testimoni Terpilih')
                        ->modalDescription('Apakah Anda yakin ingin menghapus testimoni yang dipilih? Tindakan ini tidak dapat dibatalkan.')
                        ->modalSubmitActionLabel('Ya, Hapus Semua')
                        ->modalCancelActionLabel('Batal'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageTestimonis::route('/'),
        ];
    }
}
