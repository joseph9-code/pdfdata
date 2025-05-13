<?php

namespace App\Filament\Resources\SSCStudyMaterialResource\Pages;

use App\Filament\Resources\SSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSSCStudyMaterial extends EditRecord
{
    protected static string $resource = SSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
