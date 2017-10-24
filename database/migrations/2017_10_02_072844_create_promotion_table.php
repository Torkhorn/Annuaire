<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromotionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promotion', function(Blueprint $table)
		{
			$table->integer('prom_id', true)->comment('Identifiant d\'une promotion');
			$table->date('prom_begin')->comment('Date de d?but de la formation');
			$table->date('prom_end')->comment('Date de fin de la fomation');
			$table->string('prom_name', 25);
			$table->integer('form_id')->index('FK_Promotion_form_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promotion');
	}

}
