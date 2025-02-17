<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImportController;

use App\Http\Controllers\PopulationController;

Route::get('/import', function () {
    return view('import');
});

Route::post('/import', [ImportController::class, 'import'])->name('import');

Route::get('/', [PopulationController::class, 'search'])->name('search');