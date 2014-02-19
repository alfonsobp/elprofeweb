<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phones' , function($table) 
 		{
		$table->increments('id');
		$table->integer('person_id')->unsigned();
		$table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');

		$table->string('mobile_operator',50);
		$table->string('mobile_number',20);
	
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
		
			Schema :: drop ('phones');
		
	}

}