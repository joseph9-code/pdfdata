<?php

namespace App\Filament\Resources\OthersStudyMaterialResource\Pages;

use App\Filament\Resources\OthersStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOthersStudyMaterial extends EditRecord
{
    protected static string $resource = OthersStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
