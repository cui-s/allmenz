<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/vendor/twitteroauth/twitteroauth.php');

class UserController extends BaseController {

    private static $CONSUMER_KEY='wHLNxp8OcgwLFIrLIhmiuQ';
    private static $CONSUMER_SECRET='bpmW1B4UdzWYjHvsphYi84hgkSvlTS0CXPCFGbMIk';
    private static $OAUTH_CALLBACK='http://tan-c.allmenz.jp/public/login_twitter_redirect';

    /*
    |--------------------------------------------------------------------------
    | User Controller
    |--------------------------------------------------------------------------
    |
    | Description goes here
    |
    */

    public function doSignup($name = null, $username = null, $method = "manual", $picture = ""){
        if($name != null){
            // do nothing when user use the form to login (manual login or twitter)
        }
        else{   // facebook
            $input = Input::all();
            $name = isset($input['name']) ? $input['name'] : $input['firstname']." ".$input['lastname'];
            $username = $input['email'];
            $method = isset($input['method']) ? $input['method'] : 'manual';
            $picture = isset($input['picture']) ? $input['picture'] : "";
        }

        $user = DB::table('users')->where('user_name', $username)->first();

        if($user){
            //            Log::info($input);
            //            Log::info($user);
            //            Log::info("user exists");
        }
        else{
            Eloquent::unguard();

            User::create(array(
                'name'          =>  $name,
                'user_name'     =>  $username,
                'password'      =>  isset($input['password']) ? Hash::make($input['password']): "",       // i think password is a keyword
                'create_time'   =>  date('Y/m/d H:i:s'),
                'create_method' =>  $method,
                'picture_url'   =>  $picture
            ));
        }

        // auth him
        $user_data =  DB::table('users')->where('user_name', $username)->pluck('id');
        $user =  User::find($user_data);
        Auth::login($user);
        Session::put('user', $user);
    }

    public function doLogout(){
        Auth::logout(); // log the user out of our application
        Session::flush();
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
            $user_data =  DB::table('users')->where('user_name', Input::get('email'))->pluck('id');
            Session::put('user', User::find($user_data));
            return "OK";
        } else {
            return "パスワードが無効です";
        }
    }

    public function doLoginTwitter(){           // Processing before twitter redireciton
        session_start();

        $connection = new TwitterOAuth(self::$CONSUMER_KEY, self::$CONSUMER_SECRET);
        $request_token = $connection->getRequestToken(self::$OAUTH_CALLBACK); //get Request Token

        if( $request_token)
        {
            Log::info($request_token);
            $token = $request_token['oauth_token'];
            $_SESSION['request_token'] = $token ;
            $_SESSION['request_token_secret'] = $request_token['oauth_token_secret'];
//            Log::info($token);
//            Log::info($request_token['oauth_token_secret']);
//            Log::info($connection->http_code);

            switch ($connection->http_code)
            {
                case 200:
                    $url = $connection->getAuthorizeURL($token);
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

    public function doLoginRedirectTwitter(){       // processing after the user is authenticated from twitter and is directed back to the homepage
        session_start();

        if(isset($_GET['oauth_token']))
        {
            $connection = new TwitterOAuth(self::$CONSUMER_KEY, self::$CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
            $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
            if($access_token)
            {
                $connection = new TwitterOAuth(self::$CONSUMER_KEY, self::$CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
                $params =array();
                $params['include_entities']='false';
                $content = $connection->get('account/verify_credentials',$params);

                if($content && isset($content->screen_name) && isset($content->name))
                {
                    log::info($content->profile_image_url);

                    // sign up the user
                    self::doSignup($content->screen_name, $content->name, "twitter",$content->profile_image_url);
                    return Redirect::to('/');
                }
                else
                {
                    echo "<h4> Login Error </h4>";
                }
            }
            else
            {
                echo "<h4> Login Error </h4>";
            }
        }

    }
}