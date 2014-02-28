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
    return View::make('index');
});


Route::get('tag_detail', function()
{
	return View::make('tag_detail');
});

Route::get('tag_main', function()
{
    return View::make('tag_main');
});

Route::get('search', function()
{
    return View::make('search');
});


Route::get('users', function()
{
    return 'Users!';
});
