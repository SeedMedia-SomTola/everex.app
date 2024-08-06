<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/news', [NewsController::class,'index']);
Route::get('/pricing', [PricingController::class,'index']);
Route::get('/merchant',  [MerchantController::class,'index']);
Route::get('/delivery',  [DeliveryController::class,'index']);
Route::get('/solution',  [SolutionController::class,'index']);

Route::get('locale/{lang}',  [LocalizationController::class,'setLocale'])->name('locale');
