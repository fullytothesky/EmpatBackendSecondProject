<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatedController;
use App\Http\Controllers\NavigationController;

Route::get('/', function () {  //so here we actually have basic response on request be returning a basic view
    return view('welcome');
})->name('welcome');

Route::get('/friends', [CreatedController::class, 'firstView'])->name('friends');
Route::get('/connect', [CreatedController::class, 'secondView'])->name('connect');
Route::get('/interests/{friend}', [CreatedController::class, 'interestsView'])->name('interests');
Route::get('/events/{friend}', [CreatedController::class, 'eventView'])->name('events');
//nav
Route::get('/personalPage/{friend}', [NavigationController::class, 'getPersonalView'])->name('personal_page');
Route::get('/hobby/{id}', [NavigationController::class, 'getHobbyView'])->name('hobby');
Route::get('/events', [NavigationController::class, 'getEventsView'])->name('saved_events');
//post
Route::post('/interests/{friend}', [CreatedController::class, 'storeInterests']);
Route::post('/events/{friend}', [CreatedController::class, 'storeEvent']);
Route::post('/connect', [CreatedController::class, 'store']);
