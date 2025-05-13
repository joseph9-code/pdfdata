<?php

namespace App\Filament\Resources\OthersStudyMaterialResource\Pages;

use App\Filament\Resources\OthersStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOthersStudyMaterials extends ListRecords
{
    protected static string $resource = OthersStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("New Post"),
        ];
    }
}
