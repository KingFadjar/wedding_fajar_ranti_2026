<?php

use App\Http\Controllers\RsvpController;
use App\Http\Controllers\WeddingController;
use App\Http\Middleware\RsvpAdminBasicAuth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WeddingController::class, 'cover'])->name('wedding.cover');
Route::get('/undangan', [WeddingController::class, 'invitation'])->name('wedding.invitation');
Route::get('/galeri', [WeddingController::class, 'gallery'])->name('wedding.gallery');
Route::post('/rsvp', [RsvpController::class, 'store'])->middleware('throttle:10,1')->name('rsvp.store');

Route::middleware(RsvpAdminBasicAuth::class)->prefix('admin')->group(function () {
    Route::get('/rsvp', [RsvpController::class, 'index'])->name('admin.rsvp.index');
    Route::get('/rsvp/export', [RsvpController::class, 'export'])->name('admin.rsvp.export');
});
