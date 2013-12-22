<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('startPage');
});

Route::any('test', function()
{
    return 'Hello World';
});
Route::get('get_a_book', "BookController@GrabBook");
Route::get('books', 'BookController@ShowBooks');
Route::get('insert', 'BookController@InsertBooks');
Route::get('insertBook', 'BookController@InsertThisBook');
//Route::get('books/{criteria}','BookController@ShowBooks');


