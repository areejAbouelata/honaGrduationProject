<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiseaseSymptomsTable extends Migration {

	public function up()
	{
		Schema::create('disease_symptoms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('disease_id')->unsigned();
			$table->integer('symptom_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('disease_symptoms');
	}
}