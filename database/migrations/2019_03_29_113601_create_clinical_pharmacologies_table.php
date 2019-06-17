<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicalPharmacologiesTable extends Migration {

	public function up()
	{
		Schema::create('clinical_pharmacologies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->text('discribtion');
		});
	}

	public function down()
	{
		Schema::drop('clinical_pharmacologies');
	}
}