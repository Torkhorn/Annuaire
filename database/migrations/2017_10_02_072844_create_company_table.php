<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->integer('comp_id', true)->comment('Identifiant d\'une entreprise (company)');
			$table->string('comp_name', 50)->comment('Nom de l\'entreprise');
			$table->string('comp_adress', 25)->nullable()->comment('adresse de l\'entreprise');
			$table->integer('comp_zipcode')->nullable()->comment('Code postal d\'une adresse ');
			$table->string('comp_city', 25)->nullable()->comment('Ville de l\'entreprise');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company');
	}

}
