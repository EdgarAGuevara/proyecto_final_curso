<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TelefonosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Telefono::create([
				'contacto_id'=>$index,
				'label' => 'Local',
				'num_tel' => $faker->randomNumber(9),
			]);
		}
	}

}