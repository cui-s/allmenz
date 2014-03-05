<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

    public $timestamps = false;

    public static function validate($input) {
        $rules = array(
            'firstname' => 'Required|Min:3|Max:80|AlphaNum',
            'lastname'  => 'Required|Min:3|Max:80|AlphaNum',
            'email'     => 'Required|Between:3,64|Email',
            'password'  =>'Required|AlphaNum|Between:4,8|Confirmed',
            'password_confirmation'=>'Required|AlphaNum|Between:4,8'
        );

        return Validator::make($input, $rules);

//        $v = Validator::make($input, $rules);
//
//        if( $v->passes() ) {
//            # code for validation success!
//        } else {
//            # code for validation failure
//        }

    }

}