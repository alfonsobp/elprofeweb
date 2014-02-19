<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdvertLanguage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{



		Schema::create('advert_language' , function($table) 
 		{
			$table->integer('advert_id')->unsigned();
			$table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
			$table->integer('language_id')->unsigned();
			$table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
			$keys = array('advert_id', 'language_id');
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
		Schema::drop('advert_language');
	}

}