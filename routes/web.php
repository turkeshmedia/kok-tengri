<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'name' => 'Kök Tengri',
        'status' => 'ready',
        'stack' => [
            'laravel' => '13',
            'filament' => '5',
        ],
    ]);
});

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'app' => 'Kök Tengri',
    ]);
});
