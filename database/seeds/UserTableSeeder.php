<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker; 
class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$faker->seed(40);
		for($i=0; $i<20; $i ++)
		{
			$idjugadores=\DB::table('jugadores')->insertGetId(array(
				
				'tipo_doc'      	=> $faker->randomElement(['Cedula','Tarjeta de  identidad','Contraseña','Registro civil','Pasaporte']),
				'num_doc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'FeNa'          	=> $faker->dateTimeBetween('-20 years', '-15 years')->format('Y-m-d'),
				'direccion'    		=> $faker->streetAddress,
				'telefono'      	=> $faker->phoneNumber,
				'nom_acudiente' 	=> $faker->name,
				'tel_acudiente' 	=> $faker->phoneNumber,
				'email'  			=> $faker->unique()->email,
				'sisben'			=> true,
				'estracto'			=> 2,
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'activo'			=> true,
				'sancion'			=> false,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));

				$identrenadores=\DB::table('entrenadores')->insertGetId(array(
				
				'tipo_doc'      	=> $faker->randomElement(['Cedula','Tarjeta de  identidad','Contraseña','Registro civil','Pasaporte']),
				'num_doc'       	=> $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nombre'        	=> $faker->firstName,
				'apellido'      	=> $faker->lastName,
				'FeNa'          	=> $faker->dateTimeBetween('-40 years', '-25 years')->format('Y-m-d'),
				'direccion'    		=> $faker->streetAddress,
				'telefono'      	=> $faker->phoneNumber,
				'email'  			=> $faker->unique()->email,
				'nivelAcademico'    => $faker->randomElement(['Basica Primaria','Bachiller','Tecnico','Tecnologico','Profesional','PostGrado']),
				'tipo'				=> $faker->randomElement(['Delegado','Delegado suplente','Utilero','DTecnico','Asistente tecnico ','Preparador fisico','Medico','Auxiliar medico','kinesiologo']),
				'activo'			=> true,
				'sancion'			=> false,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));

				$idclubes=\DB::table('clubes')->insertGetId(array(
				
				
				'nit'       	    => $faker->unique()->numberBetween($min = 100000000, $max = 900000000),
				'nombre'        	=> $faker->company,
				'direccion'    		=> $faker->streetAddress,
				'delegado_id'     	=> $identrenadores,
				'delegadoSuplente_id'=>$identrenadores,
				'utilero_id'		 =>$identrenadores,
			
				'Dtecnico_id'     	 => $identrenadores,
				'asistenteTecnico_id'=>$identrenadores,
				'preparadorFisico_id'=>$identrenadores,
				'medico_id'			 =>$identrenadores,
				'medicoAuxiliar_id'  =>$identrenadores,
				'kinesiologo_id'     =>$identrenadores,

				'telefono'      	=> $faker->phoneNumber,
				'disciplina'   		=> $faker->randomElement(['Futbol','Balon cesto','Patinaje','Boleybol','Natacion','Atletismo']),
				'categoria'         => $faker->randomElement(['Mixta','Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']),
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));

                DB::table('registro_jugador_club')->insert(array(
				
				'jugador_id' => $idjugadores,
				'club_id'    => $idclubes,
				'activo'	 => true,
				
				));

              $idequipos=\DB::table('equipos')->insertGetId(array(
				
				
				'nombre'        	=> $faker->company,
				'disciplina'   		=> $faker->randomElement(['Futbol','Balon cesto','Patinaje','Boleybol','Natacion','Atletismo']),
				'categoria'         => $faker->randomElement(['Mixta','Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']),
				'Dtecnico_id' 		=> $identrenadores,//el capitan del equipo
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));



                DB::table('registro_jugador_equipos')->insert(array(
				
				'jugador_id'   => $idjugadores,
				'equipo_id'    => $idequipos,
				'activo'	 => true,
				
				));


				$idtorneos=\DB::table('torneos')->insertGetId(array(
				
				
				'nombre'        	=> $faker->userName,
				'disciplina'   		=> $faker->randomElement(['Futbol','Balon cesto','Patinaje','Boleybol','Natacion','Atletismo']),
				'categoria'         => $faker->randomElement(['Mixta','Infantil','Libre','Femenino','Masculino','Juvenil','Profesional']),
				'Fecha_inicio'      => $faker->dateTimeBetween('-2 years', '-1 years')->format('Y-m-d'),
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));


                $idcanchas=\DB::table('canchas')->insertGetId(array(
				
				
				'nombre'        	=> $faker->company,
				'barrio'        	=> $faker->state,
				'activo'			=> true,
				'observaciones'		=> $faker->paragraph(rand(2,5))
				));

		}
	}

}
 