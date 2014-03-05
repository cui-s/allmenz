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


Route::post('signup', array('uses' => 'UserController@doSignup'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('uses' => 'UserController@doLogout'));


/*
|--------------------------------------------------------------------------
| Application Route Pages
|--------------------------------------------------------------------------
|
*/


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

Route::get('user', function()
{
    return View::make('user');
});

Route::get('user_edit', function()
{
    return View::make('user_edit');
});

Route::get('user_activity', function()
{
    return View::make('user_activity');
});


Route::get('category', function()
{
    return View::make('category_main');
});

Route::get('qna', function()
{
    return View::make('qna');
});


/*
|--------------------------------------------------------------------------
| Application Route URLS
|--------------------------------------------------------------------------
|
*/

$url_main = URL::to('index');
$url_user = URL::to('user');
$url_tag = URL::to('tag_main');
$url_category = URL::to('category_main');

