<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionsUsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-users', [UserController::class, 'getAllUsers']);
Route::get('/all-permissions', [PermissionController::class, 'getAllPermissions']);
Route::apiResource('/user-permission', PermissionsUsersController::class)->only('store');
Route::get('/user/{id}', [UserController::class, 'displayUserPermissions']);
