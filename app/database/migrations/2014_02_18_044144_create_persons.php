<?php

use Illuminate\Database\Migrations\Migration;

class CreatePersons extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('persons', function($table)
 		{
			$table->increments('id');
			$table->integer('academicdegree_id')->unsigned();
			$table->foreign('academicdegree_id')->references('id')->on('academicdegrees')->onDelete('cascade');
			$table->integer('localization_id')->unsigned();
			$table->foreign('localization_id')->references('id')->on('localizations')->onDelete('cascade');

			$table->string('names', 100);
			$table->string('last_name', 100);
			$table->string('doc_number', 25);
			$table->string('doc_type', 25);
			$table->date('born_date');
			$table->string('nationality', 100);
			$table->string('address', 150);
			$table->string('career', 100);
			$table->string('curriculum');
			$table->string('photo');
			$table->string('state',20);
			$table->string('email', 100);
			$table->tinyInteger('is_premium');
			$table->string('account_manager', 50);
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
		Schema::drop('persons');
	}

}