<?php

use Illuminate\Database\Migrations\Migration;

class AuthoredByTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authored_by',function($t) {
		$t->bigInteger('ISBN')->reference('ISBN')->on('books')->onDelete('cascade');
		$t->integer('id')->reference('id')->on('authors')->onDelete('cascade');
		
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
		Schema::drop('authored_by');
	}

}