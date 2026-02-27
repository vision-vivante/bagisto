<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::view('/lang','layouts.app');

Route::get('/switch/{lang}',[LanguageController::class,'switchLanguage'])->name('switch');
