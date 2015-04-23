<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHbArtworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hb_artworks', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('art_code',20);
			$table->string('art_author',20);
			$table->string('art_name',200);
			$table->string('art_size',50);
			$table->string('art_material',40);
			$table->string('art_age',20);
			$table->double('art_price_hkd',10,10);
			$table->double('art_price_rmb',10,10);
			$table->text('author_sumarry');
			$table->string('art_inscription',100);
			$table->string('art_tizhi',100);
			$table->string('art_mark',100);
			$table->string('art_seal',100);
			$table->string('art_collection_seal',100);
			$table->string('art_publish',200);
			$table->string('art_annotation',1000);
			$table->string('art_signature',200);
			$table->string('art_phase',500);
			$table->string('art_reference',200);
			$table->string('art_record',100);
			$table->string('art_exhibition',100);
			$table->string('art_source',100);


			$table->integer('art_lot');
			$table->double('begin_price_hkd',10,10);
			$table->double('end_price_hkd',10,10);
			$table->double('begin_price_rmb',10,10);
			$table->double('end_price_rmb',10,10);
			$table->text('art_sumarry');

			$table->string('art_dynasty',20);
			$table->text('art_description');
			$table->tinyInteger('is_liupai');
			$table->tinyInteger('lang');

			$table->timestamps();
$table->integer('asa_id')->unsigned();
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
		Schema::drop('hb_artworks');
	}

}
