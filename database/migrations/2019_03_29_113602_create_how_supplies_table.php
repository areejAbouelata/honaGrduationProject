<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHowSuppliesTable extends Migration {

	public function up()
	{
		Schema::create('how_supplies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->text('describtion');
		});
	}

	public function down()
	{
		Schema::drop('how_supplies');
	}
}