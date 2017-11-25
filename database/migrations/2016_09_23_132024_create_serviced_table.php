<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('serviced', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('client');
			$table->string('janitor');
			$table->string('hours');
			$table->timestamp('started_at');
			$table->timestamp('ended_at');

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
		Schema::drop('serviced');
	}

}
