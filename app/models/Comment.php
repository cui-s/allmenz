<?php

class Comment extends Eloquent{

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
//    protected $hidden = array('password');

    public $timestamps = false;

    public static function validate($input, $type) {

    }

}