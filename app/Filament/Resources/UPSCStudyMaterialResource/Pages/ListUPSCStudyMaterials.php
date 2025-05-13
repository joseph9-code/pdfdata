<?php

namespace App\Filament\Resources\UPSCStudyMaterialResource\Pages;

use App\Filament\Resources\UPSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUPSCStudyMaterials extends ListRecords
{
    protected static string $resource = UPSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("New Post"),
        ];
    }
}
