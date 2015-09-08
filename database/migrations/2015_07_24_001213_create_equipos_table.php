<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration {
 
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',50);
			$table->enum('disciplina',['Futbol','Balon cesto','Patinaje','Boleybol','Natacion','Atletismo']);
			$table->enum('categoria',['Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']);
			$table->integer('Dtecnico_id')->unsigned();//el capitan de equipo
			$table->boolean('activo',true);
			$table->mediumText	('observaciones')->nullable();
			$table->timestamps();

			$table->foreign('Dtecnico_id')
				  ->references('id')
				  ->on('entrenadores')
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
		Schema::drop('equipos');
	}

}
