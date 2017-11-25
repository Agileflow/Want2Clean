<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname', 60);
			$table->string('lastname', 60);
			$table->string('street', 125);
			$table->string('town/province', 120);
			$table->string('city', 120);
			$table->string('postCode', 20);
			$table->string('country')->default('United Kingdom');
			$table->string('telephone', 20);
			$table->string('mobileNumber', 20)->unique();
			$table->string('nationality', 120);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
