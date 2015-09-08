<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorneosTable extends Migration {

	/** 
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{//hasta aqui llegamos hay  q esperar mas logica para seguir
		Schema::create('torneos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',50);
			$table->enum('disciplina',['Futbol','Balon cesto','Patinaje','Boleybol'.'Natacion','Atletismo']);
			$table->enum('categoria',['Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']);
			$table->date('Fecha_inicio');
			$table->boolean('activo',true);
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
		Schema::drop('torneos');
	}

}
