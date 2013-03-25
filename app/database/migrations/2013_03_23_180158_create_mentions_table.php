<?php

use Illuminate\Database\Migrations\Migration;

class CreateMentionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mentions', function($table)
		{
			$table->increments('id');
			$table->integer( 'post_id' );
			$table->integer( 'user_id' );
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
		Schema::drop('mentions');
	}

}