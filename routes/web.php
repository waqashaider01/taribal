<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\Homecontroller;
// use App\http\Controllers\frontend\Aboutcontroller;
use App\Http\Controllers\frontend\Contactscontroller;
use App\Http\Controllers\frontend\Servicescontroller;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\CartPageController;
use App\Http\Controllers\frontend\AboutUsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
/*
Route::get('/', function () {
    return view('frontend/index');
});
*/

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/our-services', [Servicescontroller::class, 'index']);
Route::get('/about', [AboutUsController::class, 'index']);
Route::get('/Contact', [Contactscontroller::class, 'index']);
Route::get('/our-brands', [ShopController::class, 'index']);
Route::get('/CartPage', [CartPageController::class, 'index']);
Route::get('/portfolio-masonry', [Homecontroller::class, 'portfolio']);
Route::get('/servcies-detail-1', [Homecontroller::class, 'servciesdetail']);
Route::get('/portfolio-standar', [Homecontroller::class, 'portfoliostandar']);
Route::get('/blog', [Homecontroller::class, 'blog']);
Route::get('/single-product', [Homecontroller::class, 'singleproduct']);
Route::get('/cart-page', [Homecontroller::class, 'cartpage']);
Route::get('/checkout-page', [Homecontroller::class, 'checkoutpage']);
Route::get('/post', [Homecontroller::class, 'post']);
Route::get('/servcies-detail-2', [Homecontroller::class, 'servciesdetail2']);
Route::get('/servcies-detail-3', [Homecontroller::class, 'servciesdetail3']);
Route::get('/servcies-detail-4', [Homecontroller::class, 'servciesdetail4']);
Route::get('/servcies-detail-5', [Homecontroller::class, 'servciesdetail5']);
Route::get('/servcies-detail-6', [Homecontroller::class, 'servciesdetail6']);
Route::get('/portfolio-detail-slider', [Homecontroller::class, 'portfoliodetailslider']);
Route::get('/portfolio-left', [Homecontroller::class, 'portfolioleft']);
Route::get('/portfolio-left', [Homecontroller::class, 'portfolioleft']);
Route::get('/house-form', [Homecontroller::class, 'house']);
Route::get('/commercial-form', [Homecontroller::class, 'commercial']);