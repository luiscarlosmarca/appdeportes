<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroJugadorClubesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registro_jugador_club', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('jugador_id')->unsigned();
			$table->integer('club_id')->unsigned();
			$table->boolean('activo',true);
			$table->timestamps();

			$table->foreign('jugador_id')
				  ->references('id')
				  ->on('jugadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('NO ACTION');


		    $table->foreign('club_id')
				  ->references('id')
				  ->on('clubes')
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
		Schema::drop('registro_jugador_clubes');
	}

}
