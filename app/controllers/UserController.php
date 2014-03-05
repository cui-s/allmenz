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

        $v = User::validate(Input::all(), "sign_up");

        Log::info("after validation");
        if ( $v->passes() ) {

            User::create(array(
                'name'      =>  Input::get('firstname')." ".Input::get('lastname') ,
                'user_name' =>  Input::get('email'),
                'password'  =>  Hash::make(Input::get('password')),
            ));
            return View::make('index')->with('login_status', true); //TODO:  need to send in some parameter to output hte bar as well
        } else {
            return Redirect::to('/')->withErrors($v->getMessageBag());
        }

    }

    public function doLogout(){

        Auth::logout(); // log the user out of our application
        return Redirect::to('/'); // redirect the user to the login screen
    }

    public function doLogin(){

        $v = User::validate(Input::all(), "login_in");

        // if the validator fails, redirect back to the form
        if ($v->fails()) {
            return Redirect::to('/')
                ->withErrors($v) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'user_name' => Input::get('email'),
                'password' 	=> Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return View::make('index')->with('login_status', true);
            } else {
                // validation not successful, send back uo form
                echo "password/username combi is wrong"; //TODO rewrite to disaply error on the form
            }

        }
    }

}