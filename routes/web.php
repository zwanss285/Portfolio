<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\GuestbookController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/guestbook', [GuestbookController::class, 'store'])->name('guestbook.store');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');