<?php

use App\Http\Controllers\DokterController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('dokter.index'));

Route::resource('dokter', DokterController::class)->except('show');