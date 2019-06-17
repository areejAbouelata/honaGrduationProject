<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWarningsTable extends Migration {

	public function up()
	{
		Schema::create('warnings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->text('warning');
		});
	}

	public function down()
	{
		Schema::drop('warnings');
	}
}