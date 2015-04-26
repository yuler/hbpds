<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\HbAuction;
use App\HbAsa;
use App\HbArtwork;

class HbAuctionsSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			$hbAuction = HbAuction::create([
				'auction_name' => $faker->text(10),
				'preview_begin_time' => $faker->dateTimeThisYear($max = 'now'),
				'preview_end_time' => $faker->dateTimeThisYear($max = 'now'),
				'auction_begin_time' => $faker->dateTimeThisYear($max = 'now'),
				'auction_end_time' => $faker->dateTimeThisYear($max = 'now'),
				'lang' => 0,
 			]);
 			foreach(range(1, 10) as $index){
	 			$hbAsa = HbAsa::create([
	 				'auction_id' => $hbAuction->id,
	 				'asa_name' => $faker->text(10),
	 				'preview_begin_time' => $faker->dateTimeThisYear($max = 'now'),
	 				'preview_end_time' => $faker->dateTimeThisYear($max = 'now'),
	 				'begin_time' => $faker->dateTimeThisYear($max = 'now'),
	 				'end_time' => $faker->dateTimeThisYear($max = 'now'),
	 				'asa_addr' => $faker->text(10),
	 				'asa_image' => 'http://fakeimg.pl/300x200/?text=logo',
	 				'asa_only_online' => $index % 2,
	 				'asa_online_url' => 'www.online.com',
	 				'asa_online_logo' => 'http://fakeimg.pl/100x100/?text=logo',
	 				'asa_group' => '1'
	 			]);

	 			foreach(range(1, 10) as $index){ 
	 				$hbArtwork = HbArtwork::create([
		 				'art_code' => 'LOT' . $index ,
		 				'art_author' => $faker->text(10),
		 				'art_name' => $faker->text(10),
		 				'art_size' => $faker->text(10),
		 				'art_material' => $faker->text(10),
		 				'art_age' => $index,
		 				'art_price_hkd' => $index,
		 				'art_price_rmb' => $index,
		 				'author_sumarry' => $index,
		 				'art_inscription' => $index,
		 				'art_tizhi' => $index,
						'art_mark' => $index,
						'art_seal' => $index,
						'art_collection_seal' => $index,
						'art_publish' => $index,
						'art_annotation' => $index,
						'art_signature' => $index,
						'art_phase' => $index,
						'art_reference' => $index,
						'art_record' => $index,
						'art_exhibition' => $index,
						'art_source' => $index,
						'asa_id' => $hbAsa->id,
						'art_lot' => $index,
						'begin_price_hkd' => $index,
						'end_price_hkd' => $index,
						'begin_price_rmb' => $index,
						'end_price_rmb' => $index,
						'art_sumarry' => $index,
						'art_dynasty' => $index,
						'art_description' => $index,
						'is_liupai' => $index,
					]);
	 			}
 			}
		}
	}

}