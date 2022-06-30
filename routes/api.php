<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\BookController;

Route::prefix('v1')->group(function () {
    \Illuminate\Support\Facades\App::setLocale('ru');
    Route::resource('book', BookController::class);
});
