<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorkedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('worked', function(Blueprint $table)
		{
			$table->foreign('comp_id', 'FK_worked_comp_id')->references('comp_id')->on('company')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FK_worked_user_id')->references('user_id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('worked', function(Blueprint $table)
		{
			$table->dropForeign('FK_worked_comp_id');
			$table->dropForeign('FK_worked_user_id');
		});
	}

}
