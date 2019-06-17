<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingSymptomsTable extends Migration {

	public function up()
	{
		Schema::create('meeting_symptoms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('doctors_book_id')->unsigned()->nullable();
			$table->integer('symptom_id')->unsigned();
			$table->text('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('meeting_symptoms');
	}
}