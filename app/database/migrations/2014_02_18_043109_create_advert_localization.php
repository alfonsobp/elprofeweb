<?php

use Illuminate\Database\Migrations\Migration;

class CreateAdvertLocalization extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_localization' , function($table) 
 		{
		
		$table->integer('advert_id')->unsigned();
		$table->foreign('advert_id')->references('id')->on('adverts')->onDelete('cascade');
		$table->integer('localization_id')->unsigned();
		$table->foreign('localization_id')->references('id')->on('localizations')->onDelete('cascade');
		$keys = array('advert_id', 'localization_id');
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
		Schema:: drop('advert_localization');
	}

}