<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMedicationsTable extends Migration {

	public function up()
	{
		Schema::create('medications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('brand_name', 255);
			$table->string('name', 255)->nullable();
			$table->text('describtion');
			$table->double('minimum_dose', 8,2);
			$table->double('maximum_dose', 8,2);
			$table->string('dose_unit');
		});
	}

	public function down()
	{
		Schema::drop('medications');
	}
}