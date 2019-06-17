<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrecautionsTable extends Migration {

	public function up()
	{
		Schema::create('precautions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->text('precaution');
		});
	}

	public function down()
	{
		Schema::drop('precautions');
	}
}