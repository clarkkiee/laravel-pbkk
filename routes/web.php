<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [UserController::class, 'getMyEvents'])->name('dashboard');

    Route::resource('event', EventController::class);
    Route::get('/event', [EventController::class, 'index'])->name('events.index');
    Route::post('/event', [EventController::class, 'store'])->name('events.store');
    
    Route::post('/event/{id}/join', [EventController::class, 'join'])->name('events.join');
    Route::post('/event/{id}/leave', [EventController::class, 'leave'])->name('events.leave');
    Route::delete('/event/{id}/destroy', [EventController::class, 'destroy'])->name('events.destroy');
    Route::put('/event/{id}/update', [EventController::class, 'update'])->name('events.update');

});


require __DIR__.'/auth.php';
