<?php

use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAdverts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('adverts',function($table) {
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
		});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$table->dropColumn('person_id');
	}

}