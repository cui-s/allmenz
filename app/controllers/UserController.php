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

    public function login()
    {
//        $results = DB::select('select * from users where id = ?', array(1));
//        return $results;
        $data = Input::old();
        var_dump($data);

    }


}