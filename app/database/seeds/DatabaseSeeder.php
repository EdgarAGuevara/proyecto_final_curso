<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		/*Aqui es donde este archivo que es el generador de seed's llama a la seed que queramos*/
		$this->call('UsuariosTableSeeder');
		$this->call('TelefonosTableSeeder');
		$this->call('ContactosTableSeeder');
	}

}
