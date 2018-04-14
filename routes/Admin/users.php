<?php

Route::resource('usuario','Admin\UserController');

Route::post('registerUser', 'Admin\UserController@store');
