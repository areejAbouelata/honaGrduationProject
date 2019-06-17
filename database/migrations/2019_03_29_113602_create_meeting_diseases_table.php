<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMeetingDiseasesTable extends Migration {

	public function up()
	{
		Schema::create('meeting_diseases', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('doctors_book_id')->unsigned()->nullable();
			$table->integer('disease_id')->unsigned()->nullable();
			$table->text('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('meeting_diseases');
	}
}