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
        $input = Input::all();

        $user = DB::table('users')->where('user_name', $input['email'])->first();
        if($user){
//            Log::info($input);
//            Log::info($user);
//            Log::info("user exists");
        }
        else{
            Eloquent::unguard();

            User::create(array(
                'name'          =>  isset($input['name']) ? $input['name'] : $input['firstname']." ".$input['lastname'] ,
                'user_name'     =>  $input['email'],
                'password'      =>  isset($input['password']) ? Hash::make($input['password']): "",       // i think password is a keyword
                'create_time'   =>  date('Y/m/d H:i:s'),
                'create_method' =>  isset($input['method']) ? $input['method'] : 'manual'
            ));
            Log::info("new user created");
        }

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