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
Route::group(
    ['prefix' =>  'admin',
      'namespace' => 'Admin',
        'as' => 'admin.'

    ],

    function (){
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
}
);


Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', function () {
    return view('about');
})->name('AboutAs');

Route::get('/news', 'NewsController@index')->name('News');


Route::get('/news/category', 'CategoryController@index')->name('CategoryNews');
Route::get('/news/category/{categoryId}', 'CategoryController@show')->name('CategoryOne');


Route::get('/news/{id}', 'NewsController@show')->name('NewsOne');


Route::get('/home', 'HomeController@index')->name('home');
