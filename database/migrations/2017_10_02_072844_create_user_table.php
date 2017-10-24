<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('user_id', true)->comment('Cl? primaire auto increment de la table Eleve');
			$table->string('user_lastname', 25)->comment('Nom d\'un el?ve');
			$table->string('user_birthname', 25)->nullable()->comment('Nom de naissance pour les femmes');
			$table->string('user_firstname', 25)->comment('Pr?nom d\'un ?l?ve');
			$table->string('user_adress', 50)->comment('Adresse de l\'?l?ve');
			$table->integer('user_zipcode')->comment('Code postal de l\'adresse de l\'?l?ve');
			$table->string('user_city', 50)->comment('Ville de l\'adresse de l?l?ve');
			$table->string('user_country', 25)->nullable()->comment('Pays de l\'adresse de l?l?ve');
			$table->char('user_phone', 15)->nullable()->comment('T?l?phone personnel de l\'?l?ve');
			$table->char('user_phone_pro', 15)->nullable()->comment('T?l?phone professionnel de l\'?l?ve');
			$table->string('user_mail', 50)->nullable()->comment('Adresse mail de l\'?l?ve');
			$table->string('user_password', 15)->nullable();
			$table->string('user_picture', 50)->nullable()->comment('Photo de l\'utilisateur si c\'est un el?ve');
			$table->integer('cat_id')->index('FK_User_cat_id')->comment('Cat?gorie d\'un utilisateur');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
