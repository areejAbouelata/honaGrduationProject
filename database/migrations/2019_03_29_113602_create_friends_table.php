<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFriendsTable extends Migration {

	public function up()
	{
		Schema::create('friends', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('friend_id');
			$table->string('relationship', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('friends');
	}
}