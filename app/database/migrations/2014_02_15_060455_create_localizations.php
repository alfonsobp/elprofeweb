<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalizations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizations', function( $table)
		{
			$table->increments('id');	
			$table->string('cod_dept',4);	
			$table->string('cod_prov',4);	
			$table->string('cod_dist',4);	
			$table->string('name',50);	
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
		
			Schema :: drop ('localizations');
		
	}

}