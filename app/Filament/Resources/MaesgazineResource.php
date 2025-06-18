<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Maesgazine;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MaesgazineResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\MaesgazineResource\RelationManagers;
use App\Filament\Resources\MaesgazineResource\Pages\ManageMaesgazines;

class MaesgazineResource extends Resource
{
    protected static ?string $model = Maesgazine::class;

    protected static ?string $navigationIcon = 'heroicon-s-book-open';

    protected static ?string $navigationLabel = 'Maesgazine';

    protected static ?string $navigationGroup = 'Magazine';

    protected static ?int $navigationSort = 3;

    /**
     * Configure the form for editing a Maesgazine record.
     *
     * Provides a form with fields for 'judul', 'slug', 'maesgazine' image, and 'pdf'
     * file upload. The 'slug' field is read only and is automatically generated
     * from the 'judul' field. The 'maesgazine' image field is required and accepts
     * JPEG, PNG, and WebP image types. The 'pdf' file upload field is required and
     * accepts PDF files.
     *
     * @param Form $form The form instance to configure.
     * @return Form The configured form instance.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        // Judul field
                        TextInput::make('judul')
                            ->label('Judul')/*  */
                            ->live(true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->required(),

                        // Slug field
                        TextInput::make('slug')
                            ->readOnly()
                            ->required(),

                        // Maesgazine image field
                        SpatieMediaLibraryFileUpload::make('maesgazine')
                            ->collection('maesgazine')
                            ->label('Sampul Maesgazine')
                            ->image()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->panelAspectRatio('2:1')
                            ->imageEditor()
                            ->required(),

                        // PDF file upload field
                        SpatieMediaLibraryFileUpload::make('pdf')
                            ->collection('pdf')
                            ->acceptedFileTypes(['application/pdf'])
                            ->label('File PDF')
                            ->required(),
                    ]),
            ]);
    }

    /**
     * Configures the table for displaying Maesgazine records.
     *
     * Defines the columns for 'judul', 'slug', and 'maesgazine' image with specific
     * settings such as width and height for the image column. Provides actions
     * for editing and deleting individual records, as well as bulk actions
     * for deleting multiple records at once.
     *
     * @param Table $table The table instance to configure.
     * @return Table The configured table instance.
     */

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')->label('Judul')->searchable(),
                TextColumn::make('slug')->label('Slug')->searchable(),
                SpatieMediaLibraryImageColumn::make('maesgazine')
                    ->width(100)
                    ->height(100)
                    ->collection('maesgazine')
                    ->label('Sampul Maesgazine'),
            ])
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMaesgazines::route('/'),
        ];
    }
}
