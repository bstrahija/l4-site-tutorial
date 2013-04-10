<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->text('body')->nullable();
			$table->integer('user_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}

}
