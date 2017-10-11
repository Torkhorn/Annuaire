<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBelongToTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('belong_to', function(Blueprint $table)
		{
			$table->foreign('prom_id', 'FK_belong_to_prom_id')->references('prom_id')->on('promotion')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FK_belong_to_user_id')->references('user_id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('belong_to', function(Blueprint $table)
		{
			$table->dropForeign('FK_belong_to_prom_id');
			$table->dropForeign('FK_belong_to_user_id');
		});
	}

}
