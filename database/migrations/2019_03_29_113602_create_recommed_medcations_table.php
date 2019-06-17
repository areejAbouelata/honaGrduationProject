<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecommedMedcationsTable extends Migration {

	public function up()
	{
		Schema::create('recommed_medcations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->string('medication', 255);
			$table->integer('medication_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('recommed_medcations');
	}
}