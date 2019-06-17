<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhRepositoriesTable extends Migration {

	public function up()
	{
		Schema::create('ph_repositories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('pharmacy_id')->unsigned();
			$table->integer('medication_id')->unsigned();
			$table->double('amount')->nullable();
			$table->string('unit', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('ph_repositories');
	}
}