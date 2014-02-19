<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdvertClassroom extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_classroom' , function($table)  
 		{
	
			$table->integer('advert_id')->unsigned();
			$table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
			$table->integer('classroom_id')->unsigned();
			$table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
			$keys = array('advert_id', 'classroom_id');
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
		Schema::drop('advert_classroom');
	}

}