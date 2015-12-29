<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadoresTable extends Migration {

	/** 
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('tipo_doc',['Cedula','Tarjeta de identidad','Contraseña','Registro civill','Pasaporte']);
			$table->double('num_doc')->unique()->unsigned();
			$table->string('nombre',30);
			$table->string('apellido',30);
			$table->date('FeNa')->nullable();
			$table->string('direccion',50);
			$table->string('telefono',15);
			$table->string('nom_acudiente',50)->nullable();
			$table->string('tel_acudiente',15)->nullable();
			$table->string('email')->unique()->nullable();
			$table->boolean('sisben');
			$table->char('estracto',2);
			$table->enum('nivelAcademico',['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']);
			$table->boolean('activo',true);
			$table->boolean('sancion',false);
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
		Schema::drop('jugadores');
	}

}
