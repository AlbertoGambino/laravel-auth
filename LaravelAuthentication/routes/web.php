<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')
        -> name('logout');

Route::get('/', 'GuestController@home')
        ->name('home');

Route::get('/car/edit/{id}', 'LoggedController@edit')
        ->name('car-edit');


Route::post('/car/update/{id}', 'LoggedController@update')
        ->name('car-update');


Route::get('/car/delete/{id}', 'LoggedController@delete')
        ->name('car-delete');
