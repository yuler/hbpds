<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbAuctionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_auctions', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('auction_name',100);
			$table->timestamp('preview_begin_time');
			$table->timestamp('preview_end_time');
			$table->timestamp('auction_begin_time');
			$table->timestamp('auction_end_time');
			$table->tinyInteger('lang')->nullable()->default(0);

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
		Schema::drop('hb_auctions');
	}

}
