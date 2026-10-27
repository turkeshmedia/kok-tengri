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
