<?php

use App\Http\Controllers\locationcontroller;
use App\Http\Controllers\villacontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('villas',[villacontroller::class, 'index']);
Route::get('/locations', [locationcontroller::class, 'index']);
Route::get('/locations/{id}', [locationcontroller::class, 'show']);
Route::get('/villas/search', [villacontroller::class, 'searchByName']);
