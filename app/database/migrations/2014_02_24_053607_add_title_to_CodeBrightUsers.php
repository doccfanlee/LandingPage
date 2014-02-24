<?php

use Illuminate\Database\Migrations\Migration;

class AddTitleToCodeBrightUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('CodeBrightUsers', function($table)
		{
			$table->string('title');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('CodeBrightUsers', function()
		{
			$table->dropColumn('title');
		});
	}

}
