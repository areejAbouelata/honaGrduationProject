<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration {

	public function up()
	{
		Schema::create('doctors', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 255);
			$table->string('email', 255);
			$table->string('password', 255)->nullable();
			$table->string('api_token', 255);
			$table->string('profissional_statement', 255)->nullable();
			$table->integer('hospital_id')->unsigned()->nullable();
			$table->date('practicing_from');
			$table->datetime('started_at');
			$table->string('end_at');
			$table->double('visita', 8,2)->nullable();
			$table->integer('specialization_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('doctors');
	}
}