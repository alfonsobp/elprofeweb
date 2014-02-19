<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdvertSubject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_subject' , function($table) 
 		{
			$table->integer('advert_id')->unsigned();
			$table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
			$table->integer('subject_id')->unsigned();
			$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
			$keys = array('advert_id', 'subject_id');
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
		Schema::drop('advert_subject');
	}

}