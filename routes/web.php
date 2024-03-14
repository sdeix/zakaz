<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
})->name('main-page');

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::view('account','account')->middleware('auth')->name('account');

Route::get('/authorization', function () {
    if(Auth::check()) {
        return redirect(route('account'));
    }
    return view('authorization');
})->name('authorization');
Route::post('authorization',[\App\Http\Controllers\AuthorizationController::class,'login']);

Route::get('registration', function () {
    if(Auth::check()) {
        return redirect(route('account'));
    }
    return view('registration');
})->name('registration');
Route::post('registration',[\App\Http\Controllers\RegisterController::class,'save']);

Route::get('logout', function () {
    Auth::logout() ;
    return redirect(route('authorization'));
})->name('logout');

Route::get('products', function () {
    $products = DB::table("Товар")->get();
    return view("products", compact("products"));
})->name("products");

Route::get('/basket', [\App\Http\Controllers\BasketController::class,'index'])->name('basket');

Route::post('/basket/add/{id_товара}', [\App\Http\Controllers\BasketController::class,'add'])
    ->where('id_товара', '[0-9]+')
    ->name('basket.add');

Route::post('/basket/plus/{id}',  [\App\Http\Controllers\BasketController::class,'plus'])
    ->where('id', '[0-9]+')
    ->name('basket.plus');
Route::post('/basket/minus/{id}', [\App\Http\Controllers\BasketController::class,'minus'])
    ->where('id', '[0-9]+')
    ->name('basket.minus');
Route::post('/basket/clear', [\App\Http\Controllers\BasketController::class,'clear'])->name('basket.clear');



Route::get('add_product', function () {
    if(Auth::check()) {
        if(Auth::user()->role=="admin"){
            return view('add_product');
        }
    }
    return redirect(route('products'));
})->name('add_product');
Route::post('add_product',[\App\Http\Controllers\Add_ProductController::class,'save']);






