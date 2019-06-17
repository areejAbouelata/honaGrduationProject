<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSymptomsTable extends Migration {

	public function up()
	{
		Schema::create('symptoms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('type');
			$table->string('place');
			$table->string('symptom_form');
		});
	}

	public function down()
	{
		Schema::drop('symptoms');
	}
}