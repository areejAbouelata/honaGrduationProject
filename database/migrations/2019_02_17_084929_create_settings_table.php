<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('app_name');
			$table->string('logo');
			$table->text('slogan');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}