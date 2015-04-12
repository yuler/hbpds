<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\HbNew;
use App\HbAuction;
use App\HbAsa;

class HbNewsSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			HbNew::create([
			  'title' => $faker->text(10),
			  'content' => $faker->text(50),
			  'lang'=>'1',
			  'published_at'=> $faker->dateTimeThisYear($max = 'now'),i
			  'published' => $index % 2,
			  'created_at' => $faker->dateTimeThisYear($max = 'now'),
			  'updated_at' => $faker->dateTimeThisYear($max = 'now'),
 			]);


 			$hbAuction = HbAuction::create([
			  'auction_name' => $faker->text(10)
 			]);
 			foreach(range(1, 30) as $index)
			{
	 			HbAsa::create([
	 				'asa_name'=>$faker->text(10),
	 				'auction_id' => $hbAuction->id
	 			]);
	 		}
		}
	}

}