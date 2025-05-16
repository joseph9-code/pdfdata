<?php

use App\Livewire\PdfDownload;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // or your homepage blade file
})->name('home');
Route::get('/general-knowledge', PdfDownload::class)->name('pdf-download.page');
