<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname', 60);
			$table->string('maidenname', 60);
			$table->string('lastname', 60);
			$table->string('street', 125);
			$table->string('town/province', 120);
			$table->string('city', 120);
			$table->string('postCode', 20);
			$table->string('country')->default('United Kingdom');
			$table->string('telephone', 20);
			$table->string('mobileNumber', 20)->unique();
			$table->string('email')->unique();
			$table->string('contract_duration');
			$table->timestamp('start_date');		
			$table->timestamp('end_date');
			$table->string('service_day');
			$table->string('resume_at');
			$table->string('hours');		
			$table->string('payment_plan');			
			$table->string('active');		
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
		Schema::drop('clients');
	}

}
