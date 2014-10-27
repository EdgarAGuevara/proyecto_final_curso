<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Contacto::create([
				'usuario_id'=>$index,
				'name'=>$faker->firstName,
				'last_name'=>$faker->lastName ,
				'email'=>$faker->email,
				'address'=>$faker->address,
			]);
		}
	}

}