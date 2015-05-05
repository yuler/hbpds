<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('asa_id')->unsigned();
			$table->integer('order');
			$table->integer('enable');
			$table->string('target_url',300);
			$table->string('name',300);
			$table->timestamps();

			$table->foreign('asa_id')->references('id')->on('hb_asas')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_ads');
	}

}
