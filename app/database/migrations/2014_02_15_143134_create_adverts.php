<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdverts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
	Schema::create('adverts' , function($table) {
		$table->increments('id');
		$table->integer('ads_type_id')->unsigned();
		$table->foreign('ads_type_id')->references('id')->on('ads_types')->onDelete('cascade');

		$table->string('content',400);
		$table->string('title',100);
		$table->float('rate'); //tarifa
		$table->float('permanence'); //tarifa
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
		Schema::drop('adverts');
	}

}