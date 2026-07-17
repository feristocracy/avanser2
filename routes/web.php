<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
