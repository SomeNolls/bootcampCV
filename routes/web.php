<?php

use Illuminate\Support\Facades\Route;
use App\Models\text_fields;

Route::get('/', function () {
    $fields = text_fields::all();
   
    return view('welcome', compact('fields'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'update'])->name('home');
