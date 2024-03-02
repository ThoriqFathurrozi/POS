<?php

use App\Http\Controllers\product\CategoryController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'product/category',
    'as'         => 'product.category',
], function () {
    Route::get('/{category}', [CategoryController::class, 'category']);
});
