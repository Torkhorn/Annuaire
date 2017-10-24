<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('gives', function(Blueprint $table)
		{
			$table->foreign('form_id', 'FK_gives_form_id')->references('form_id')->on('formation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('skill_id', 'FK_gives_skill_id')->references('skill_id')->on('skill')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('gives', function(Blueprint $table)
		{
			$table->dropForeign('FK_gives_form_id');
			$table->dropForeign('FK_gives_skill_id');
		});
	}

}
