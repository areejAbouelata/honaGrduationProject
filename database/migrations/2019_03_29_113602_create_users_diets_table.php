<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersDietsTable extends Migration {

	public function up()
	{
		Schema::create('users_diets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('diet_id')->unsigned();
			$table->integer('patient_id');
			$table->date('started_at');
			$table->date('end_at')->nullable();
			$table->string('duration')->nullable();
			$table->text('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('users_diets');
	}
}