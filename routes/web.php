<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BannerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('banner',[BannerController::class,'banner']);
Route::post('post_banner',[BannerController::class,'post_banner']);

Route::get('about-us',[BannerController::class,'about_us']);