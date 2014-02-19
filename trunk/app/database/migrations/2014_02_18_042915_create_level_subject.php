<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelSubject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('level_subject' , function($table) 
 		{
		$table->integer('subject_id')->unsigned();
		$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
		$table->integer('level_id')->unsigned();
		$table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
		$table->string('name',100);
		$keys = array('subject_id', 'level_id');
		$table -> primary($keys);

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
		Schema :: drop ('level_subject');
	}

}