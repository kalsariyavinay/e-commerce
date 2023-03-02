<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\SubsubcategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BuysValidtionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RazorpayController;


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
// Logout
Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout',[LogoutController::class,'perform'])->name('logout.perform');
    // razorpay controller
    Route::get('product',[RazorpayController::class,'index'])->middleware('auth');
    Route::post('razorpay-payment',[RazorpayController::class,'store'])->name('razorpay.store')->middleware('auth');
 
 });

// Home controller
Route::get('/',[HomeController::class,'index'])->name('index');

// category view
Route::get('mobile/',[HomeController::class,'mobile'])->name('mobile');
Route::get('fashion/',[HomeController::class,'fashion'])->name('fashion');
Route::get('kitchen/',[HomeController::class,'kitchen'])->name('kitchen');

// shoppages view
Route::get('Buy-Now/{id}',[HomeController::class,'buynow'])->name('buynow')->middleware('auth');
Route::get('check-out/',[HomeController::class,'checkout'])->name('checkout')->middleware('auth');
Route::get('products/{slug}/',[HomeController::class,'products'])->name('products');
Route::get('shopdetails/{slug}/',[HomeController::class,'shopdetails'])->name('shopdetails');
Route::get('shopgrid/',[HomeController::class,'shopgrid'])->name('shopgrid');
Route::get('contact/',[HomeController::class,'contact'])->name('contact');

Route::post('cart', [CartController::class, 'store'])->name('cart.store')->middleware('auth');



Route::get('/buy', [BuysValidtionController::class, 'createbuys']);
Route::post('/buy', [BuysValidtionController::class, 'buys'])->name('validate.buy');


//Group Auth Middleware
Route::get('admin/',[HomeController::class,'dashboard'])->name('dashboard')->middleware('auth');
Route::group(['prefix' =>'admin','middleware' => ['auth']], function(){

    // Home controller
    Route::post('getsubcategory/',[HomeController::class,'get_subcategory_ajax'])->name('get_subcategory_ajax');
    Route::post('getsubsubcategory/',[HomeController::class,'get_subsubcategory_ajax'])->name('get_subsubcategory_ajax');

    // Product controller 
    Route::resource('product', ProductsController::class);
    Route::get('product/delete/{id}',[ProductsController::class,'delete'])->name('product.delete');
    Route::get('product/status-update/{id}/{status}',[ProductsController::class,'status_update'])->name('product.status_update');

    // Category controller
    Route::resource('category', CategoryController::class);
    Route::get('category/status-update/{id}/{status}',[CategoryController::class,'status_update'])->name('category.status_update');
    Route::get('category/remove/{id}',[CategoryController::class,'destroy'])->name('category.remove');

    //subcategory controller
    Route::resource('subcategory', SubcategoryController::class);
    Route::get('subcategory/delete/{id}',[SubcategoryController::class,'delete'])->name('subcategory.delete');

    //subsubcategory controller
    Route::resource('subsubcategory', SubsubcategoryController::class);
    Route::get('subsubcategory/delete/{id}',[SubsubcategoryController::class,'delete'])->name('subsubcategory.delete');

    });


    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/profile/update_profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    // userdata view
    Route::get('myaccount/',[HomeController::class,'myaccount'])->name('myaccount');
    Route::get('address/',[HomeController::class,'address'])->name('address');
    Route::get('sidebar/',[HomeController::class,'sidebar'])->name('sidebar');
    Route::get('purchase/',[HomeController::class,'purchase'])->name('purchase');
    Route::get('wishlist/',[HomeController::class,'wishlist'])->name('wishlist');


