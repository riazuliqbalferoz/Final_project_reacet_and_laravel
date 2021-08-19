<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Newbabycow;
use App\Http\Controllers\Milk_collection;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Post('register',[UserController::class,'register']);

Route::Post('login',[UserController::class,'Login']);
Route::Post('test',[loginController::class,'test']);
Route::Post('newcow',[Newbabycow::class,'newcow']);
Route::Post('milk_collection',[Milk_collection::class,'milk_collection']);
