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

Route::get('/', function () {
    return view('welcome');
});
//static route
Route::get('/demo', function () {
    return view('pages.demo');
});

//Dynamic route
/*
Route::get('/student/{id}', function ($id) {
    return 'this is student '. $id;
});
*/

Route::get('/login', function () {
    return view('login');
});

Route::resource('departments','DepartmentsController');
Route::resource('shares','SharesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
