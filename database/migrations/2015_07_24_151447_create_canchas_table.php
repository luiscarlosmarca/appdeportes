<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanchasTable extends Migration {

	/** 
	 * Run the migratio ns.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('canchas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',50);
			$table->string('barrio',50);
			$table->boolean('activo',true);
			$table->mediumText('imagen');
			$table->mediumText	('observaciones')->nullable();
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
		Schema::drop('canchas');
	}

}
