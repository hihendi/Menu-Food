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






// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::resource('dahsboard/products', 'ProductController')->middleware('auth');
Route::resource('dashboard/categories', 'CategoryController')->middleware('auth')->except('show');
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);

Route::livewire('/', 'homepage')->name('homepage');
Route::livewire('/products', 'product-index')->name('products');
Route::livewire('/products/{id}', 'product-detail')->name('products.detail');


Route::livewire('/products/category/{id}', 'product-category')->name('products.category');


Route::livewire('/categories', 'category-index')->name('categories');