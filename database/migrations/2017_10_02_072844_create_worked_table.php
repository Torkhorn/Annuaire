<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('worked', function(Blueprint $table)
		{
			$table->integer('user_id')->comment('Cl? primaire auto increment de la table User');
			$table->integer('comp_id')->index('FK_worked_comp_id')->comment('Identifiant d\'une entreprise');
			$table->primary(['user_id','comp_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('worked');
	}

}
