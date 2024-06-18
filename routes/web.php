<?php

use App\Livewire\InfolistDemo;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'demo');
Route::get('/', InfolistDemo::class);