<?php

namespace App\Filament\Resources\GkStudyMaterialResource\Pages;

use App\Filament\Resources\GkStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGkStudyMaterial extends EditRecord
{
    protected static string $resource = GkStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
