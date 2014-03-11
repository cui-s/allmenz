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

Route::post('create_comment', array('uses' => 'QuestionController@createComment'));
Route::post('best_answer', array('uses' => 'QuestionController@bestAnswer'));
Route::post('vote_question', array('uses' => 'QuestionController@vote'));
Route::post('answer_question', array('uses' => 'QuestionController@answerQuestion'));
Route::post('post_question', array('uses' => 'QuestionController@postQuestion'));
Route::post('signup', array('uses' => 'UserController@doSignup'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('login_twitter', array('uses' => 'UserController@doLoginTwitter'));
Route::get('login_twitter_redirect', array('uses' => 'UserController@doLoginRedirectTwitter'));
Route::get('logout', array('uses' => 'UserController@doLogout'));


/*
|--------------------------------------------------------------------------
| Application Route Pages
|--------------------------------------------------------------------------
|
*/


Route::get('question/{id}', array('as' => 'question', function($id)
{
    $answerFullDetailAll = Array();

    $answerList = Answer::where("question_id", $id)->get();
    foreach ($answerList as $oneAnswer){
        $answerFullDetail = new StdClass();
        $answerFullDetail -> answer = $oneAnswer;
        $answerFullDetail -> comment = Comment::where("question_id", $id) -> where("answer_id", $oneAnswer->id)->get();
        $answerFullDetail -> answerer = User:: where("id", $oneAnswer->answerer_id)->first();
        array_push($answerFullDetailAll, $answerFullDetail);
    }

    return View::make('question')
        ->with("question",Question::find($id))
        // and the asker detail from the question_id
        ->with("answerList",$answerFullDetailAll);
        // and all the users with the answer_id

        // and all the comments with the respective answer
}));


Route::get('tag', array('as' => 'tag', function()
{
    return View::make('tag_main');
}));

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
