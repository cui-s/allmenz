<?php

class UserController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | Description goes here
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function doSignup(){

        Eloquent::unguard();

        User::create(array(
            'name'      =>  Input::get('firstname')." ".Input::get('lastname') ,
            'user_name' =>  Input::get('email'),
            'password'  =>  Hash::make(Input::get('password')),
        ));

        Eloquent::guard();
    }

    public function doLogout(){
        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }

    public function doLogin(){

        // create our user data for the authentication
        $userdata = array(
            'user_name' => Input::get('email'),
            'password' 	=> Input::get('password')
        );

        // attempt to do the login， based on the result the redirection will be handled accordingly at the front end
        if (Auth::attempt($userdata)) {
            return "OK";
        } else {
            return "パスワードが無効です";
        }

    }

}