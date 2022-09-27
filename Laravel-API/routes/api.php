<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Catogery;
use Illuminate\Routing\Route as RoutingRoute;

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



 
Route::get("product", [ProductController::class, 'index']);
Route::apiResource('catogeries', 'App\Http\Controllers\CatogeryController')->middleware('auth:sanctum');;
Route::post('register',  [UserController::class,'store']  );
Route::post( 'loginUser',  [UserController::class,'loginUser']  );