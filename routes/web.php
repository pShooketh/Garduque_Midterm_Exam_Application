<?php

use App\Http\Controllers\ProduictController;

Route::get('/products', [ProductController::class, 'index']);
