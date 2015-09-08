<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perfil_personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('direccion',50);
 			$table->string('email')->unique()->nullable();	
			$table->boolean('sisben');
			$table->char('estracto',2);
			$table->enum('nivelAcademico',['Basica Primaria','Bachiller','Tecnico','Tecnologico'.'Profesional','PostGrado']);
			$table->enum('rol',['jugador','profesor','organizador','administrativo'.'yo']);
			$table->mediumText	('detallesGenerales')->nullable();
			$table->integer('persona_id')->unsigned();
			$table->date('FeNa')->nullable();
			$table->foreign('persona_id')
				  ->references('id')
				  ->on('personas')
				  ->onDelete('cascade');
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
		Schema::drop('perfil_personas');
	}

}
