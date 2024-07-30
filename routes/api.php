<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'User retrieved successfully',
        'data' => $request->user(),
    ]);
})
    ->middleware('auth:sanctum')
    ->name('api.users');
