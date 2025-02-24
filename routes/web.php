<?php

use App\Http\Controllers\TaxCalculator;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaxCalculator::class, 'index'])->name('home');
Route::get('/calculatePPh21_ter', [TaxCalculator::class, 'calculatePPh21_ter'])->name('calculate.pph21.ter');
