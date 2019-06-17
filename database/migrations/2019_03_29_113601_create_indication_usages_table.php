<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndicationUsagesTable extends Migration {

	public function up()
	{
		Schema::create('indication_usages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('medication_id')->unsigned();
			$table->boolean('fda_approved');
			$table->text('describtion')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('indication_usages');
	}
}