<?php

namespace App\Filament\Resources\SSCStudyMaterialResource\Pages;

use App\Filament\Resources\SSCStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSSCStudyMaterials extends ListRecords
{
    protected static string $resource = SSCStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("New Post"),
        ];
    }
}
