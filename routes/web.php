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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'AboutController@index');

Route::get('/todos', 'TodoController@index');
Route::get('/todos/{todo}', 'TodoController@show');
Route::get('/todos/{todo}/create', 'TodoController@create');
Route::get('/todos/{todo}/edit','TodoController@edit');

Route::post('/todos','TodoController@store');
Route::post('/todos/{todo}','TodoController@update');
Route::patch('/todos/{todo}','TodoController@update');
Route::delete('/todos/{todo}','TodoController@destroy');
Route::patch('/todos/{todo}/completed','TodoController@complete');
