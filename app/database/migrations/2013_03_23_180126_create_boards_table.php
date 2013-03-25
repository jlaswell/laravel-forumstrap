<?php

use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boards', function($table)
		{
			$table->increments('id');
			$table->string( 'title', 255 );
			$table->string( 'description', 255 )->nullable();
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
		Schema::drop('boards');
	}

}