<?php

use Illuminate\Database\Migrations\Migration;

class BooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books',function($t){
			$t->bigInteger('ISBN')->nullable();
			$t->string('title')->nullable();
			$t->text('description')->nullable();
			$t->date('date_published')->nullable();
			$t->timestamps();
		}
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}