<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// Hace uso del modelo de Fabricante.
use App\Teacher;

// Le indicamos que utilice también Faker.
// Información sobre Faker: https://github.com/fzaninotto/Faker
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Creamos una instancia de Faker
		$faker = Faker::create();

		// Creamos un bucle para cubrir 5 fabricantes:
		//for ($i=0; $i<4; $i++)
		//{
			// Cuando llamamos al método create del Modelo Fabricante 
			// se está creando una nueva fila en la tabla.
			Teacher::create(
				[
					'name'=> 'Luis alzate',
					'university'=> 'ITM'
				]
			);
		//}

	}

}