<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gives', function(Blueprint $table)
		{
			$table->integer('skill_id')->comment('Identifant d\'un comp?tence');
			$table->integer('form_id')->index('FK_gives_form_id');
			$table->primary(['skill_id','form_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gives');
	}

}
