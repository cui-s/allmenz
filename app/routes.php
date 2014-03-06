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

Route::get('test', array('as' => 'test', function()
{
    echo "login pls";
}));

Route::get('tag', function()
{
    return View::make('tag_main');
});

Route::get('tag_detail', function()
{
    return View::make('tag_detail');
});

Route::get('search', function()
{
    return View::make('search');
});

Route::get('category', function()
{
    return View::make('category_main');
});

Route::get('qna', function()
{
    return View::make('qna');
});


Route::get('tutorial', function()
{
    return View::make('tutorial');
});

/*
|--------------------------------------------------------------------------
| USER Route
|--------------------------------------------------------------------------
*/

Route::group(array('prefix' => 'user', 'before' => 'auth'), function(){

    Route::get('pinboard',  array('as' => 'user_pinboard', function()
    {
        return View::make('user');
//        ->with("login_status", $login_status)
    }));

    Route::get('edit', function()
    {
        return View::make('user_edit');
    });

    Route::get('timeline', function()
    {
        return View::make('user_activity');
    });

});

/*
|--------------------------------------------------------------------------
| Application Route URLS
|--------------------------------------------------------------------------
*/

$url_main           = URL::to('/');
$url_tag            = URL::to('tag_main');
$url_tag_detail     = URL::to('tag_detail');
$url_user           = URL::to('user');
$url_user_edit      = URL::to('user_edit');
$url_user_activity  = URL::to('user_activity');
$url_search         = URL::to('search');
$url_category       = URL::to('category_main');
$url_qna            = URL::to('qna');


//App::missing(function($exception)
//{
//
//    // shows an error page (app/views/error.blade.php)
//    // returns a page not found error
//    return Response::view('error', array(), 404);
//});
