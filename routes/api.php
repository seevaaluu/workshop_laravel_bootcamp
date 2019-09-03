<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/books', 'BooksController@index');
Route::post('/books', 'BooksController@store');
Route::get('/books/{book_id}', 'BooksController@show');
Route::put('/books/{book_id}', 'BooksController@update');
Route::delete('/books/{book_id}', 'BooksController@destroy');

// Route::resource('books', 'BooksController',['except' => ['index', 'show', 'update']]);



