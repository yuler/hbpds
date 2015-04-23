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
			
			$table->integer('order');
			$table->integer('enable');

			$table->integer('asa_id')->unsigned();
			$table->foreign('asa_id')->references('id')->on('hb_asas')->onDelete('cascade');
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
		Schema::drop('hb_ads');
	}

}
