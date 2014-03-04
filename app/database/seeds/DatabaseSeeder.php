<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        User::create(array('name' => 'test1', 'user_name'=>'test1@gmail.com', 'password'=>'test1'));

        // TODO: sneed a more generic way for data insertion, e.g. read from text file?
    }

}