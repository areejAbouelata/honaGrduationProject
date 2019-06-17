<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSportsTable extends Migration {

	public function up()
	{
		Schema::create('sports', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->text('describtion');
			$table->integer('duration');
			$table->string('duration_unit')->nullable()->default('day');
			$table->integer('times');
			$table->string('each')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('sports');
	}
}