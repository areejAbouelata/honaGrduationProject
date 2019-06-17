<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContraindicationsTable extends Migration {

	public function up()
	{
		Schema::create('contraindications', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->text('contraindication');
		});
	}

	public function down()
	{
		Schema::drop('contraindications');
	}
}