<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatedController;

Route::get('/', function () {  //so here we actually have basic response on request be returning a basic view
    return view('welcome');
});

Route::get('/about/{name}', [CreatedController::class, 'personView']);
Route::get('/about', [CreatedController::class, 'firstView']);
Route::post('/connect', [CreatedController::class, 'store']);
Route::get('/connect', [CreatedController::class, 'secondView']);
