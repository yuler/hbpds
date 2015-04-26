<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_banners', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('name',100);
			$table->string('image_url',300);
			$table->string('target_url',300);
			$table->integer('order');
			$table->integer('enable');

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
		Schema::drop('hb_banners');
	}

}
