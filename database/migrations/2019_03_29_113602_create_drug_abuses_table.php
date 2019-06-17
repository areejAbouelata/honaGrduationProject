<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugAbusesTable extends Migration {

	public function up()
	{
		Schema::create('drug_abuses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('dependance');
			$table->integer('medication_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('drug_abuses');
	}
}