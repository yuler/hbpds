<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbArtAttsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_art_atts', function(Blueprint $table)
		{
			$table->increments('id');
			

			$table->integer('att_id')->unsigned();

/*
			
			$table->foreign('att_id')->references('id')->on('hb_attachments')->onDelete('cascade');
*/
			$table->integer('art_id')->unsigned();
			$table->foreign('art_id')->references('id')->on('hb_artworks')->onDelete('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_art_atts');
	}

}
