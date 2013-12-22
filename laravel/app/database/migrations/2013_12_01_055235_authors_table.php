<?php

use Illuminate\Database\Migrations\Migration;

class AuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors',function($t) {
		
		$t->increments('id');
		$t->string('first_name');
		$t->string('last_name');
		
		$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('authors');
	}

}