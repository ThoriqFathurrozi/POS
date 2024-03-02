<?php

use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/category.php';

Route::group([
    'prefix'     => 'product',
    'as'         => 'product.',
], function () {
    Route::get('/', [ProductController::class, 'index']);
});
