<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrenadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('tipo_doc',['Cedula','Pasaporte']);
			$table->double('num_doc')->unique()->unsigned();
			$table->string('nombre',30);
			$table->string('apellido',30);
			$table->date('FeNa');
			$table->string('direccion',50);
			$table->string('telefono',15);
			$table->string('email')->unique()->nullable();
			$table->enum('nivelAcademico',['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']);
			$table->enum('tipo',['Delegado','Delegado suplente','Utilero','DTecnico','Asistente tecnico ','Preparador fisico','Medico','Auxiliar medico','kinesiologo']);
			$table->boolean('activo',true);
			$table->boolean('sancion',true);
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
		Schema::drop('entrenadores');
	}

}
