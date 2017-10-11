<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSkillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skill', function(Blueprint $table)
		{
			$table->integer('skill_id', true)->comment('Identifant d\'un comp?tence');
			$table->string('skill_name', 25)->comment('Libell? de la comp?tence');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skill');
	}

}
