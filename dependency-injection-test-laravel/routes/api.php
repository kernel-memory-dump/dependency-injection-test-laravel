<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    // Routes that require authentication with Sanctum
    Route::get('/user', function (Request $request) {
        $user = $request->user();
        $headers = $request->headers->all();

        $responseData = [
            'user' => $user,
            'headers' => $headers,
        ];

        return response()->json($responseData);
    });

    Route::get('/test-demo-service', [Controller::class, 'testDemoService']);
});


Route::post('/register', [RegisteredUserController::class, 'store']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);