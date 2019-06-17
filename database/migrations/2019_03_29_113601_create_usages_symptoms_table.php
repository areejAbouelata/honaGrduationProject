<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsagesSymptomsTable extends Migration {

	public function up()
	{
		Schema::create('usages_symptoms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('usage_id')->unsigned();
			$table->string('symptom_name', 255);
		});
	}

	public function down()
	{
		Schema::drop('usages_symptoms');
	}
}