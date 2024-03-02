<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'     => 'transaction',
    'as'         => 'transaction.',
], function () {
    Route::get('/', [TransactionController::class, 'index']);
});
