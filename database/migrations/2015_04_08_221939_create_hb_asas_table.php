<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbAsasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_asas', function(Blueprint $table)
		{
			$table->increments('id');
			

			$table->string('asa_name',100);
			$table->timestamp('preview_begin_time');
			$table->timestamp('preview_end_time');
			$table->timestamp('begin_time');
			$table->timestamp('end_time');

			$table->string('asa_addr',200);
			$table->string('asa_preview_addr',200);
			$table->string('asa_image',200);
			$table->tinyInteger('asa_only_online');

			$table->string('asa_online_url',200);
			$table->string('asa_online_logo',100);
			$table->tinyInteger('lang');
			$table->tinyInteger('asa_group');
			$table->integer('auction_id')->unsigned();

			$table->timestamps();
			
			$table->foreign('auction_id')->references('id')->on('hb_auctions')->onDelete('cascade');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_asas');
	}

}
