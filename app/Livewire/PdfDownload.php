<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GKStudyMaterial;
use Illuminate\Support\Facades\Storage;

class PdfDownload extends Component
{
    public function render()
    {
        $documents = GKStudyMaterial::all();
        return view('livewire.pdf-download', compact('documents'));
    }

    public function download($file)
    {
        return response()->download(storage_path('app/public/' . $file));
    }
}
