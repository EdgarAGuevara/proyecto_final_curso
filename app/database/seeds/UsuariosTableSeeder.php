<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Usuario::create([
				'name' => $faker->name,
				'username'=> $faker->username,
				'email'=> $faker->email,
				'password' => '12345678'
			]);
		}
	}

}