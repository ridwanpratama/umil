<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('terms-of-service', 'tos');
Route::view('privacy-policy', 'privacy');
Route::view('contact-us', 'contact');

Route::post('/shorten', [App\Http\Controllers\ShortenController::class, 'shorten'])->name('shorten');
Route::get('result/{code}', [App\Http\Controllers\ShortenController::class, 'redirect'])->name('redirect');
Route::get('/{code}', [App\Http\Controllers\ShortenController::class, 'result'])->name('result');