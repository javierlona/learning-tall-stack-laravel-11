<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Form;
use App\Http\Controllers\PDFController;

Route::get('/counter', Counter::class);
Route::get('/form', Form::class);
Route::get('/greeting', function () {
  return 'Hello World';
});

Route::view('/foo', 'foo');
Route::view('/liveaction', 'Liveaction');
Route::view('/live2', 'livetwo');
Route::view('/welcome', 'welcome');

Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate.pdf');
Route::view('/pdf', 'pdf.document');
