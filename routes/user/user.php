<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;

Route::group([
    'prefix'     => 'user',
    'as'         => 'user.',
], function () {
    Route::get('/{id}/name/{name}', [UserController::class, 'profile']);
});
