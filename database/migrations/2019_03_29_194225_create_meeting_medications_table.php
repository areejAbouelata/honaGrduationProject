<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingMedicationsTable extends Migration {

	public function up()
	{
		Schema::create('meeting_medications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('meeting_id')->unsigned()->nullable();
			$table->integer('medication_id')->unsigned();
			$table->text('doc_advice')->nullable();
			$table->integer('times');
			$table->string('unit')->default('day');
			$table->string('duration');
		});
	}

	public function down()
	{
		Schema::drop('meeting_medications');
	}
}