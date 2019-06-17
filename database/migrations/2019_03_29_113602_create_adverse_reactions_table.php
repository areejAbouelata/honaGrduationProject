<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdverseReactionsTable extends Migration {

	public function up()
	{
		Schema::create('adverse_reactions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->text('reaction');
			$table->integer('medication_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('adverse_reactions');
	}
}