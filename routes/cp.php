<?php

use Illuminate\Support\Facades\Route;
use Ravenna\LlmsGenerator\Http\Controllers\CpController;

Route::middleware(['statamic.cp.authenticated'])
    ->prefix('llms-generator')
    ->name('llms-generator.')
    ->group(function () {
        Route::get('/', [CpController::class, 'index'])->name('index');
        Route::get('/collections', [CpController::class, 'collections'])->name('collections');
        Route::get('/additional-fields', [CpController::class, 'additional_fields'])->name('additional_fields');
        Route::get('/generate', [CpController::class, 'generate'])->name('generate');
    });

