<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsUsersTable extends Migration {

	public function up()
	{
		Schema::create('hospitals_users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id');
			$table->integer('hospital_id')->unsigned();
			$table->double('user_rating', 8,2)->nullable();
			$table->string('user_opinion', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('hospitals_users');
	}
}