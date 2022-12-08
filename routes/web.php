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
Route::get('/src/{keyword}', [SearchController::class, 'keyword']);
Route::get('/search/Category/{keyword}', [SearchController::class, 'category']);
Route::get('/search/{keyword}', [SearchController::class, 'type']);
Route::get('/description/{isbn}', [BookController::class, 'index']);

Route::get('/test', function () {
    return view('profile');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/rents', [RentController::class,'active'])->name('rents');
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/rent-current', [RentController::class, 'active'])->name('rentcurrent');
    Route::get('/rent-history', [RentController::class, 'history'])->name('renthistory');
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
    Route::get('/book/store', [BookStoreController::class, 'store']);
    Route::get('/book/create',function () {
        return view('inputBooks');
    });
    Route::get('/book-detail/{isbn}', [BookController::class,'show']);
    Route::post('/book/edit', [BookController::class, 'update']);
    Route::get('/book/update/{isbn}', [BookController::class,'show-update']);
    Route::post('/book/edit', [BookController::class, 'update']);
    Route::get('/book/delete/{isbn}', [BookController::class, 'delete']);
    Route::get('/book/all', [BookController::class, 'showAll']);
});

Route::get('/detailRent', function () {
    return view('detailRent');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});

