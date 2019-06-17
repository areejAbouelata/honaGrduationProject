<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminstrateDosesTable extends Migration {

	public function up()
	{
		Schema::create('adminstrate_doses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->double('quantity_from');
			$table->double('quantity_to');
			$table->string('dose_unit');
			$table->text('recommendation')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('adminstrate_doses');
	}
}