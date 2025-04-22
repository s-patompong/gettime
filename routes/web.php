<?php

use App\Http\Controllers\ServerTimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('get-time/{enoseId}/{message}', [ServerTimeController::class, 'storeGetTime']);
Route::get('get-time', [ServerTimeController::class, 'getTime']);
