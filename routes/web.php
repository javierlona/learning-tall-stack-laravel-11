<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Form;

Route::get('/counter', Counter::class);
Route::get('/form', Form::class);
Route::get('/greeting', function () {
  return 'Hello World';
});

Route::view('/', 'foo');