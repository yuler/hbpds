<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\HbAuction;
use App\HbAsa;

class HbAuctionsSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			$hbAuction = HbAuction::create([
			  'auction_name' => $faker->text(10)
 			]);
 			HbAsa::create([
 				'asa_name'=>$faker->text(10),
 				'auction_id' => $hbAuction->id
 			]);
		}
	}

}