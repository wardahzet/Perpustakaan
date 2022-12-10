<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WishlistController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
Route::get('/src/', [SearchController::class, 'keywords']);
Route::get('/search/Category/{keyword}', [SearchController::class, 'category']);
Route::get('/search/{keyword}', [SearchController::class, 'type']);
Route::get('/description/{isbn}', [BookController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/rents', [RentController::class,'active'])->name('rents');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/profile', function () {return view('member.profile');})->name('profile');
    Route::get('/rent-current', [RentController::class, 'active'])->name('rentcurrent');
    Route::get('/rent-history', [RentController::class, 'history'])->name('renthistory');
    Route::get('/rent-delete/{id}', [RentController::class, 'update']);
    Route::get('/logout', [LogoutController::class, 'logout'])->name('loogout');
    Route::post('/rent/validation', [RentController::class, 'validation']);
    Route::post('/rent', [RentController::class, 'create']);
    Route::get('/wishlist/delete/{isbn}', [WishlistController::class, 'destroy']);
    Route::get('/wishlist/store/{isbn}', [WishlistController::class, 'store']);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'isadmin'
])->group(function (){
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
    Route::get('/logout', [LogoutController::class, 'logout'])->name('loogout');
    Route::post('/book/store', [BookController::class, 'store']);
    Route::get('/book/data/{book}', [BookController::class, 'data'])->name('bookData');
    Route::get('/book/create', [BookController::class, 'showCreate']);
    Route::get('/book-detail/{isbn}', [BookController::class,'show']);
    Route::get('/book/edit/{isbn}', [BookController::class,'showEdit']);
    Route::get('/book/view/{isbn}', [BookController::class,'view']);
    Route::post('/book/update', [BookController::class, 'update']);
    Route::get('/book/delete/{isbn}', [BookController::class, 'destroy']);
    Route::get('/book/all', [BookController::class, 'showAll']);
});