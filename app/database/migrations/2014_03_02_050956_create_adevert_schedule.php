<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdevertSchedule extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_schedule' , function($table) 
 		{
			$table->integer('advert_id')->unsigned();
			$table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
			$table->integer('schedule_id')->unsigned();
			$table->foreign('schedule_id')->references('id')->on('schedules')->onDelete('cascade');
			$keys = array('advert_id', 'schedule_id');
			$table -> primary($keys);

			
		 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('advert_schedule');
	}

}
