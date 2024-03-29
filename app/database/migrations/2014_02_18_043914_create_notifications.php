<?php

use Illuminate\Database\Migrations\Migration;

class CreateNotifications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notifications' , function($table) 
		 {
			$table->increments('id');
			$table->string('name',100);
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
		Schema::drop('notifications');
	}

}