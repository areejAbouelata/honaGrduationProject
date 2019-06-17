<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSportsTable extends Migration {

	public function up()
	{
		Schema::create('user_sports', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('sport_id')->unsigned();
			$table->text('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('user_sports');
	}
}