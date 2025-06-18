<?php

namespace App\Filament\Resources\MaesgazineResource\Pages;

use App\Filament\Resources\MaesgazineResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMaesgazines extends ManageRecords
{
    protected static string $resource = MaesgazineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
