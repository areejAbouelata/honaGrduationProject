<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecommendDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('recommend_doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id');
			$table->string('doctor', 255);
			$table->integer('doctor_id')->unsigned()->nullable();
			$table->double('rating') ;
		});
	}

	public function down()
	{
		Schema::drop('recommend_doctors');
	}
}