<?php

namespace App\Filament\Resources\GkStudyMaterialResource\Pages;

use App\Filament\Resources\GkStudyMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGkStudyMaterial extends CreateRecord
{
    protected static string $resource = GkStudyMaterialResource::class;
    public function getTitle(): string
    {
        return 'GK Material ';
    }
}
