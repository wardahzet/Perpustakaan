<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/src/{keyword}', [SearchController::class, 'keyword'])->name('dashboard');
Route::get('/search/Category/{keyword}', [SearchController::class, 'category'])->name('dashboard');
Route::get('/search/{keyword}', [SearchController::class, 'type'])->name('dashboard');
Route::get('/rent-current', [RentController::class, 'active'])->name('rentcurrent');
Route::get('/rent-history', [RentController::class, 'history'])->name('renthistory');

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

    Route::get('/logout', [LogoutController::class, 'logout'])->name('loogout');
        
});

Route::get('/rent-history', function() {
    return View::make('rentHistory');
});
Route::get('/rent-current', function() {
    return View::make('rentCurrent');
});