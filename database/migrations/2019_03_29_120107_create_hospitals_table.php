<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration {

	public function up()
	{
		Schema::create('hospitals', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('city');
			$table->string('country');
			$table->string('contact');
			$table->double('rate', 8,2)->nullable();
			$table->integer('city_id')->unsigned();
			$table->integer('district_id')->unsigned();
			$table->integer('specialization_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('hospitals');
	}
}