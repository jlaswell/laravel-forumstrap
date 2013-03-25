<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('announcements', function($table)
		{
			$table->increments('id');
			$table->string( 'title',	255 );
			/* Path to the annoucment stored in a file. */
			$table->string( 'path',		255 );
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
		Schema::drop('announcements');
	}

}