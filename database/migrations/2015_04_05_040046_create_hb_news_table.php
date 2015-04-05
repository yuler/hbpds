<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title',100);
			$table->text('content');
			$table->tinyInteger('lang');
			$table->timestamp('published_at');
			$table->tinyInteger('published')->nullable()->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_news');
	}

}
