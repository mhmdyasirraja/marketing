<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Quotations\Index as QuotationsIndex;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('quotations', QuotationsIndex::class)
    ->middleware(['auth'])
    ->name('quotations.index');

require __DIR__.'/auth.php';
