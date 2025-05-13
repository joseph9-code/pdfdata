<?php

namespace App\Filament\Resources\MPSCStudyMaterialResource\Pages;

use App\Filament\Resources\MPSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMPSCStudyMaterials extends ListRecords
{
    protected static string $resource = MPSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("New Post"),
        ];
    }
}
