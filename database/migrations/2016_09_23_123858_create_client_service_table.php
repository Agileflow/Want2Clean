<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientServiceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_service', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('service_id');
			$table->timestamp('requested_at');

			$table->foreign('email')->references('email')->on('clients')->onDelete('cascade');
			$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_service');
	}

}
