<?php

use App\Http\Controllers\DateTimeController;
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

Route::get('/days/{start}/{end}', [DateTimeController::class, 'days']);
Route::get('/weeks/{start}/{end}', [DateTimeController::class, 'weeks']);
Route::get('{region}/{city}/{time}', [DateTimeController::class, 'timezone']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
