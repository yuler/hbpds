<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbAttachmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_attachments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('att_name',100);
			$table->string('att_path',200);
			$table->tinyInteger('att_type');
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
		Schema::drop('hb_attachments');
	}

}
