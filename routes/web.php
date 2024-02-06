<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\shopcontroller;


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
Route::get('/', [HomeController::class, 'index'])->name('home.userpage');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/redirect',[HomeController::class,'redirect']);



Route::get('/logout',[HomeController::class,'logout']);



route::get('/view_catagory',[AdminController::class,'View_catagory']);

route::post('/add_catagory',[AdminController::class,'add_catagory']);

route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

route::get('/view_product',[AdminController::class,'view_product']);


route::get('productpage', function(){
   return view('home.productpage');
});

route::get('womenpage', function(){
    return view('home.womenpage');
 });

 route::get('/add_to_cart', function () {
    return view('home.add_to_cart');
});




Route::get('/checkout', function () {
    return view('home.checkout');
})->name('checkout');


route::post('/add_product',[AdminController::class,'add_product']);



route::get('/show_product',[AdminController::class,'show_product']);


route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);


route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
