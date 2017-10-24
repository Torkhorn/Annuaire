<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBelongToTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('belong_to', function(Blueprint $table)
		{
			$table->integer('user_id')->comment('Cl? primaire auto increment de la table User');
			$table->integer('prom_id')->index('FK_belong_to_prom_id')->comment('Identifiant d\'une promotion');
			$table->primary(['user_id','prom_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('belong_to');
	}

}
