<?php

Route::resource('usuario','Admin\UserController');

Route::post('registerUser', 'Admin\UserController@addUser');
Route::post('usersDelete', 'Admin\UserController@destroy');