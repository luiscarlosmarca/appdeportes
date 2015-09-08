<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(
			'name'=>'luiscarlos',
			'email'=>'luisarlosmarca@gmail.com',
			'password'=>\Hash::make('secret'),
			'tipo'=> 'admin'   
			));
		

		\DB::table('users')->insert(array(
			'name'=>'Carlos Zapata',
			'email'=>'carloszapata@gmail.com',
			'password'=>\Hash::make('deportes'),
			'tipo'=> 'admin'   
			));
	}

}
 