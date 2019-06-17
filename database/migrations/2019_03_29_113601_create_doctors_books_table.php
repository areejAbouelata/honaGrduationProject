<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsBooksTable extends Migration {

	public function up()
	{
		Schema::create('doctors_books', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->integer('hospital_id')->unsigned()->nullable();
			$table->double('visita');
			$table->double('user_rating')->nullable();
			$table->datetime('examination_date');
			$table->text('comment')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('doctors_books');
	}
}