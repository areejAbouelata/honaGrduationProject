<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosisTable extends Migration {

	public function up()
	{
		Schema::create('diagnosis', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('diagnosis');
	}
}