<?php

use App\Http\controllers\BukuController;
use Illuminate\Support\Facades\Route;

/*
@@ -16,3 +16,5 @@
Route::get('/', function () {
    return view('welcome');
});
Route::resource('buku0235',BukuController::class);
Route::get('/buku/export', 'App\Http\controllers\BukuController@export'); 
