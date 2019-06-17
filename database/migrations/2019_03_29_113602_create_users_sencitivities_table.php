<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersSencitivitiesTable extends Migration {

	public function up()
	{
		Schema::create('users_sencitivities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->integer('sencitivity_id')->unsigned();
			$table->text('note');
		});
	}

	public function down()
	{
		Schema::drop('users_sencitivities');
	}
}