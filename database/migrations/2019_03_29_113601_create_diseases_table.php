<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiseasesTable extends Migration {

	public function up()
	{
		Schema::create('diseases', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->decimal('age');
			$table->enum('sex', array('male', 'female'));
			$table->string('pain_type');
			$table->string('pain_place');
			$table->double('bload_preasue');
			$table->string('disease_sickness');
			$table->string('suger_level')->nullable();
			$table->string('sport_excercising')->nullable();
			$table->string('danger');
		});
	}

	public function down()
	{
		Schema::drop('diseases');
	}
}