<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\userController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [userController::class,'index']);
Route::get('adminlogin', [userController::class,'adminlogin']);
Route::get('userlogin', [userController::class,'userlogin']);
Route::post('adminlogins', [userController::class,'adminlogins']);
Route::post('userlogins', [userController::class,'userlogins']);
Route::get('admindash', [userController::class,'admindash']);
Route::get('userdash', [userController::class,'userdash']);
Route::get('userdetail', [userController::class,'userdetail']);
Route::get('activities', [userController::class,'activities']);
Route::get('user', [userController::class,'user']);
Route::post('store', [userController::class,'store']);
Route::post('agethree', [userController::class,'agethree']);
Route::get('register', [userController::class,'register']);
Route::get('mail', [userController::class,'mail']);
Route::post('registeruser', [userController::class,'registeruser']);
Route::get('logout', [userController::class,'logout']);