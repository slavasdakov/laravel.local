<?php

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
Route::get('/admin', 'Admin\IndexController@index')->name('admin.index');
Route::get('/admin/test1', 'Admin\IndexController@test1')->name('admin.test1');
Route::get('/admin/test2', 'Admin\IndexController@test2')->name('admin.test2');

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', function () {
    return view('about');
})->name('AboutAs');

Route::get('/news', 'NewsController@index')->name('News');
Route::get('/news/{id}', 'NewsController@show')->name('NewsOne');

Route::get('/news/category', 'CategoryController@index')->name('CategoryNews');
Route::get('/news/category/sport', 'CategoryController@sport')->name('SportNews');
Route::get('/news/category/economic', 'CategoryController@economic')->name('EconomicNews');
Route::get('/news/category/important', 'CategoryController@important')->name('ImportantNews');
Route::get('/news/category/political', 'CategoryController@political')->name('PoliticalNews');
