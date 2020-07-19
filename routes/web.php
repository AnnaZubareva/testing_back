<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('/todo', 'TodorController');
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
