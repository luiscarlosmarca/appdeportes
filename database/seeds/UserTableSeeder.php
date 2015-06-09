<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'luiscarlos',
			'email'=>'luisarlosmarca@gmail.com',
			'password'=>\Hash::make('secret')
			));
		
	}

}
 