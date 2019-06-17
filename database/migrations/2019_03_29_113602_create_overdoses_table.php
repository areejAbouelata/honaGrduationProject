<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOverdosesTable extends Migration {

	public function up()
	{
		Schema::create('overdoses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('resault');
			$table->integer('medication_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('overdoses');
	}
}