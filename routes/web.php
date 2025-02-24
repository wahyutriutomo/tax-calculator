<?php

use App\Http\Controllers\TaxCalculator;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaxCalculator::class, 'index'])->name('home');
