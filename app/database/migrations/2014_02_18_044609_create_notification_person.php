<?php

use Illuminate\Database\Migrations\Migration;

class CreateNotificationPerson extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification_person' , function($table)  
 		{
	
			$table->integer('notification_id')->unsigned();
			$table->foreign('notification_id')->references('id')->on('notifications')->onDelete('cascade');
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
			$keys = array('notification_id', 'person_id');
			$table -> primary($keys);
			$table->tinyInteger('state');
			
		 });
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notification_person');
	}

}