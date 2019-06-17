<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersBotMessagesTable extends Migration {

	public function up()
	{
		Schema::create('users_bot_messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->text('body');
		});
	}

	public function down()
	{
		Schema::drop('users_bot_messages');
	}
}