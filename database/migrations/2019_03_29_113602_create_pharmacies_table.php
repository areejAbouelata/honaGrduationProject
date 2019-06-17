<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmaciesTable extends Migration {

	public function up()
	{
		Schema::create('pharmacies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->integer('city_id')->unsigned();
			$table->integer('district_id')->unsigned();
			$table->datetime('start_at');
			$table->datetime('finish_at');
			$table->boolean('has_delivery');
		});
	}

	public function down()
	{
		Schema::drop('pharmacies');
	}
}