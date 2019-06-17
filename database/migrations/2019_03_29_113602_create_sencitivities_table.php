<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSencitivitiesTable extends Migration {

	public function up()
	{
		Schema::create('sencitivities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('type');
			$table->string('age');
			$table->enum('sex', array('male', 'female'));
		});
	}

	public function down()
	{
		Schema::drop('sencitivities');
	}
}