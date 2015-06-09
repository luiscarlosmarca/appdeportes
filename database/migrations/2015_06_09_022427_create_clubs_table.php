<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clubs-new', function(Blueprint $table)
		{
				$table->increments('id');
				$table->string('nit',20)->unique();
				$table->string('nombre')->unique();
				$table->enum('dicsiplina',['Futbol','Baloncesto','voleybol']);
				$table->integer('persona_id')->unsigned();
				$table->timestamps();
			
				$table->foreign('persona_id')
					->references('id')->on('personas')
					->onUpdate('CASCADE')
					->onDelete('CASCADE');
			
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clubs');
	}

}
