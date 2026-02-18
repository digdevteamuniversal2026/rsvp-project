<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::get('/rsvp', [RsvpController::class, 'create']); // Show form
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store'); // Handle submission

Route::get('/', function () {
    return view('welcome');
});
