<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ChatMessageController;
use App\Http\Controllers\Frontend\FrontendController;

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
/*
Route::get('/', function () {
    return view('layouts.frontend');
});*/
Route::get('/',[FrontendController::class,'index']);
Route::get('/showcategory',[FrontendController::class,'showcategory']);
Route::get('category/{id}',[FrontendController::class,'productcategory']);
Route::get('prouduct/{id}',[FrontendController::class,'productdetail']);


Route::middleware(['auth'])->group(function () {
Route::post('/addcart', [CartController::class,'store']);
Route::get('/cart', [CartController::class,'cartitems']);


Route::get('/makeorder', [OrderController::class,'create'])->name('order');
Route::post('/makeorder', [OrderController::class,'store'])->name('order.save');

Route::get('/myorder', [OrderController::class,'myordeer'])->name('user');
Route::post('rating/', [RatingController::class, 'index'])->name('rating.index');
Route::post('review', [ReviewController::class, 'index'])->name('review.index');
Route::get('/chat', [ChatMessageController::class, 'index'])->name('chat.index');
Route::post('/chat', [ChatMessageController::class, 'store'])->name('chat.store');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware('admin');
Route::get('/welcome', function () {
   return view('welcome') ;
});