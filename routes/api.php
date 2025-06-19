<?php

use App\Http\Controllers\Api\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/posts', PostApiController::class);

Route::prefix('v2')->group(function () {
    Route::apiResource('/posts', PostApiController::class);
});
