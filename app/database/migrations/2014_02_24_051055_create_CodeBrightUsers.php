<?php

use Illuminate\Database\Migrations\Migration;

class CreateCodeBrightUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('CodeBrightUsers', function($table)
	{
		$table->increments('id');
		$table->string('name', 128);
		$table->string('email');
		$table->string('password', 60);
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
		//
	}

}
