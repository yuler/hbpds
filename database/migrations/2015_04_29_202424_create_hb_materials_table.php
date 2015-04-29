<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbMaterialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_materials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('title',100);
			$table->text('content');
			$table->tinyInteger('lang');
			$table->timestamp('published_at');
			$table->tinyInteger('published')->nullable()->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hb_materials');
	}

}
