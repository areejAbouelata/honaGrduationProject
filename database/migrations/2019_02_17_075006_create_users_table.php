<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('work')->nullable();
			$table->string('address')->nullable();
			$table->date('birth')->nullable();
			$table->integer('district_id')->unsigned();
			$table->string('sex')->nullable();
			$table->string('describtion')->nullable();
			$table->integer('following_count')->nullable();
			$table->integer('followers_count')->nullable();
			$table->string('password');
			$table->string('api_token');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}