<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrarAlTorneosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//parado hay q espperar respuetas
		Schema::create('registrar_al_torneos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('torneo_id')->unsigned();
			$table->integer('club_id')->unsigned();
			$table->integer('equipo_id')->unsigned();
			
			$table->timestamps();

				
			$table->foreign('torneo_id')
				  ->references('id')
				  ->on('torneos')
				  ->onUpdate('CASCADE')
				  ->onDelete('NO ACTION');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registrar_al_torneos');
	}

}
