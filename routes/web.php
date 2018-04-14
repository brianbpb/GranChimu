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

//WEB

Route::get('/', 'Web\homeController@index');

include 'Web/auth.php';

//Route::get('/home', 'HomeController@index')->name('home');


//DashBoard

include 'Admin/users.php';

Route::get('/dashboard', 'Admin\DashboardController@index')->name('home');