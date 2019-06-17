<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvatarsTable extends Migration {

	public function up()
	{
		Schema::create('avatars', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('path', 255)->nullable();
			$table->integer('avatarable_id');
			$table->string('avatarable_type', 255);
		});
	}

	public function down()
	{
		Schema::drop('avatars');
	}
}