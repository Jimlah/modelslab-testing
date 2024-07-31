<?php

use App\Http\Controllers\API\V1\AiAgentController;
use App\Http\Controllers\API\V1\DeepFakeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'status' => 'success',
        'message' => 'User retrieved successfully',
        'data' => $request->user(),
    ]);
})
    ->middleware('auth:api')
    ->name('api.users');

Route::group(['prefix' => 'v1', 'as' => 'api.v1.'], static function () {

//    AI Agent Routes
    Route::group(['prefix' => 'ai-agent', 'as' => 'ai-agent.'], static function () {
        Route::post('/', [AiAgentController::class, 'aiAgent'])
            ->name('run');
        Route::get('/fetch/{id}',  [AiAgentController::class, 'fetch'])
            ->name('fetch');
    });


    // Deepfake Routes
    Route::group(['prefix' => 'deepfake', 'as' => 'deepfake.'], static function () {
        Route::post('/single-face-swap', [DeepFakeController::class, 'singleFaceSwap'])
            ->name('single-face-swap');
    });

});
