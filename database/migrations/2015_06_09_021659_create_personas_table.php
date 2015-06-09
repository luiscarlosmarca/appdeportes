<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas-new', function(Blueprint $table)
		{
				$table->increments('id');
				$table->string('cedula',15)->unique();
				$table->string('nombre');
				$table->enum('rol',['jugador','profesor','organizador','administrativo'.'yo']);
				$table->string('direccion');
				$table->string('email')->unique()->nullable();	
				$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas');
	}

}
