<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Notifications\ExampleNotification;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/news', [NewsController::class,'index'])->name('news');
Route::get('/pricing', [PricingController::class,'index'])->name('pricing');
Route::get('/merchant',  [MerchantController::class,'index'])->name('mercharts.register');
Route::post('/merchant', [MerchantController::class, 'register']);
Route::get('/delivery',  [DeliveryController::class,'index'])->name('deliverys.register');
Route::post('/delivery',  [DeliveryController::class,'deliveryRegister']);
Route::get('/solution',  [SolutionController::class,'index'])->name('solution');

Route::get('locale/{lang}',  [LocalizationController::class,'setLocale'])->name('locale');

