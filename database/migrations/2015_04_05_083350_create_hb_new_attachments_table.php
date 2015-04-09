<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbNewAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_new_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('attachment_id')->unsigned();
			$table->integer('new_id')->unsigned();
			$table->timestamps();
			$table->foreign('new_id')->references('id')->on('hb_news')->onDelete('cascade');
			$table->foreign('attachment_id')->references('id')->on('hb_attachments')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_new_attachments');
	}

}
