<?php

namespace App\Filament\Resources\GkStudyMaterialResource\Pages;

use App\Filament\Resources\GkStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGkStudyMaterials extends ListRecords
{
    protected static string $resource = GkStudyMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label("New"),
        ];
    }
}
