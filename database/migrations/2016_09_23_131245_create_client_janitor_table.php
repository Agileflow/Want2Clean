<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientJanitorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_janitor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('client');
			$table->string('janitor');
			$table->timestamps();

			$table->foreign('client')->references('email')->on('clients')->onDelete('cascade');
			$table->foreign('janitor')->references('email')->on('janitors')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_janitor');
	}

}
