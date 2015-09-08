<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clubes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('nit')->unique()->nullable();
			$table->string('nombre',50);
			$table->string('direccion',50);
			
			$table->integer('delegado_id')->unsigned();
			$table->integer('delegadoSuplente_id')->unsigned();
			$table->integer('utilero_id')->unsigned();
			
			$table->integer('Dtecnico_id')->unsigned()->nullable;
			$table->integer('asistenteTecnico_id')->unsigned();
			$table->integer('preparadorFisico_id')->unsigned();
			$table->integer('medico_id')->unsigned();
			$table->integer('medicoAuxiliar_id')->unsigned();
			$table->integer('kinesiologo_id')->unsigned();

			$table->string('telefono',15);
			$table->enum('disciplina',['Futbol','Balon cesto','Patinaje','Boleybol'.'Natacion','Atletismo']);
			$table->enum('categoria',['Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']);
			$table->boolean('activo',true);
			$table->mediumText	('observaciones')->nullable();
			$table->timestamps();

			


			$table->foreign('delegado_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');


			$table->foreign('delegadoSuplente_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');


			$table->foreign('utilero_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');


			

			$table->foreign('Dtecnico_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');

			$table->foreign('asistenteTecnico_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');



			$table->foreign('preparadorFisico_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');




			$table->foreign('medico_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');




		$table->foreign('medicoAuxiliar_id')
				  ->references('id')
				  ->on('entrenadores')
				  ->onUpdate('CASCADE')
				  ->onDelete('CASCADE');



		$table->foreign('kinesiologo_id')
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
		Schema::drop('clubes');
	}

}
