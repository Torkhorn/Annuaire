<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promotion', function(Blueprint $table)
		{
			$table->foreign('form_id', 'FK_Promotion_form_id')->references('form_id')->on('formation')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('promotion', function(Blueprint $table)
		{
			$table->dropForeign('FK_Promotion_form_id');
		});
	}

}
