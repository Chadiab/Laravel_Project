<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Register;
use app\Http\Controllers\Loginout;
use App\Http\Controllers\CrudPublication;

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

Route::post("register",[\App\Http\Controllers\Register::class,'register']);
Route::post("login",[Loginout::class,'login']);
Route::post("logout",[Loginout::class,'logout']);
Route::post("create",[\App\Http\Controllers\CrudPublication::class,'create']);
Route::get("read/{id}",[CrudPublication::class,'read']);
Route::put("update",[CrudPublication::class,'update']);
Route::delete("delete",[CrudPublication::class,'delete']);





