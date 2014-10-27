<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumNumtelTableTelefono extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefonos', function(Blueprint $table)
		{
			$table->bigInteger('num_tel')->nullable();			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefonos', function(Blueprint $table)
		{
			 $table->dropColumn('num_tel');
		});
	}

}
