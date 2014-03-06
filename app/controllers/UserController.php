<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/vendor/twitteroauth/twitteroauth.php');

class UserController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | Description goes here
    |
    */

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

    public function doLoginTwitter(){

        $CONSUMER_KEY='wHLNxp8OcgwLFIrLIhmiuQ';
        $CONSUMER_SECRET='bpmW1B4UdzWYjHvsphYi84hgkSvlTS0CXPCFGbMIk';
        $OAUTH_CALLBACK='http://tan-c.allmenz.jp/public';

        session_start();

        $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET);
        $request_token = $connection->getRequestToken($OAUTH_CALLBACK); //get Request Token

        if( $request_token)
        {
            Log::info($request_token);
            $token = $request_token['oauth_token'];
            $_SESSION['request_token'] = $token ;
            $_SESSION['request_token_secret'] = $request_token['oauth_token_secret'];
            Log::info($token);
            Log::info($request_token['oauth_token_secret']);
            Log::info($connection->http_code);

            switch ($connection->http_code)
            {
                case 200:
                    $url = $connection->getAuthorizeURL($token);
                    Log::info($url);
                    return Redirect::to($url);
                    break;
                default:
                    echo "Coonection with twitter Failed";
                    break;
            }

        }
        else //error receiving request token
        {
            Log::info("nth");
            echo "Error Receiving Request Token";
        }



    }

}