<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('sender_id')->unsigned();
			$table->text('content')->nullable();
			$table->integer('seen')->default(0);
			$table->integer('receiver_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}