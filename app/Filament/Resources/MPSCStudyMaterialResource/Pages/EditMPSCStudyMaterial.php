<?php

namespace App\Filament\Resources\MPSCStudyMaterialResource\Pages;

use App\Filament\Resources\MPSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMPSCStudyMaterial extends EditRecord
{
    protected static string $resource = MPSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
