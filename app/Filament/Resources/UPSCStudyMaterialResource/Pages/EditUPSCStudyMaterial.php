<?php

namespace App\Filament\Resources\UPSCStudyMaterialResource\Pages;

use App\Filament\Resources\UPSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUPSCStudyMaterial extends EditRecord
{
    protected static string $resource = UPSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
