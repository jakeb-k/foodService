<?php

use Illuminate\Support\Facades\Route;
use App\Models\Restaurant; 
use App\Http\Controllers\RestaurantController; 
use App\Http\Controllers\DishController; 
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;


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
date_default_timezone_set('Australia/Brisbane'); 
$restIdCheck = []; 
Route::resource('restaurant', RestaurantController::class);
Route::resource('dish', DishController::class); 
Route::resource('order', OrderController::class); 
Route::resource('user',UserController::class); 


Route::get('/',[RestaurantController::class, 'index']);
Route::any('/search',[RestaurantController::class, 'search']);

Route::get('/cart', [DishController::class, 'cart']);

Route::get('add-to-cart/{id}', [DishController::class, 'addToCart']);
Route::get('favs/{id}', [UserController::class, 'show']);
Route::any('user/{id}/new-fav', [UserController::class, 'newFav']);

Route::post('dish/{id}/add-tag', [DishController::class, 'addTag']); 
Route::get('dish/{id}/add-tag/{tag}', [DishController::class, 'deleteTag']); 
Route::get('/documentation', function(){
    return view('documentation'); 
});

Route::delete('remove-from-cart', [DishController::class, 'remove']);

Route::delete('clear-cart', [DishController::class, 'clearCart']);


Route::get('/dashboard', function () {
    return redirect('/')->with('restaurants', Restaurant::paginate(6));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
