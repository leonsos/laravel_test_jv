<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/customer', function () {
    return view('customer');
});
Route::get('/customer',[\App\Http\Controllers\HomeController::class,'index_customer'])->name('customer');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isadmin');
Route::middleware('auth')->group(function () {
    //Route::view('about', 'about')->name('about');
    //product
    Route::get('products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::post('products/save', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.save');
    Route::get('products/delete/{product}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');
    Route::put('products/update/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    //users
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::post('users/save', [\App\Http\Controllers\UserController::class, 'save'])->name('users.save');
    Route::put('users/update/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::get('users/delete/{user}', [\App\Http\Controllers\UserController::class, 'delete'])->name('users.delete');
    //profile
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    //shopping
    Route::post('shooping/save', [\App\Http\Controllers\ShoppingController::class, 'save'])->name('shopping.save');
    //bills
    Route::get('bills', [\App\Http\Controllers\BillController::class, 'make_bills'])->name('bills.make');
    Route::get('bills/details/{bill}', [\App\Http\Controllers\BillController::class, 'details'])->name('bills.details');    
    Route::get('bills/details/show', function () {
        return view('product.show');
    });

});
