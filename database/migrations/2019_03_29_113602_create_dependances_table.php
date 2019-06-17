<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDependancesTable extends Migration {

	public function up()
	{
		Schema::create('dependances', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->date('birth');
		});
	}

	public function down()
	{
		Schema::drop('dependances');
	}
}