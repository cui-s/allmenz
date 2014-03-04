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

    public function test()
    {
        $results = DB::select('select * from users where id = ?', array(1));
        return $results;
    }


}