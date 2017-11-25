<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJanitorUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('janitor_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('supervisor');
			$table->string('janitor');
			$table->string('approval');
			$table->timestamp('approved_at');
			$table->timestamps();

			$table->foreign('supervisor')->references('email')->on('users')->onDelete('cascade');
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
		Schema::drop('janitor_user');
	}

}
