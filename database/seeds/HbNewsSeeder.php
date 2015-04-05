<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\HbNew;

class HbNewsSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 76) as $index)
		{
			HbNew::create([
			  'title' => $faker->text(10),
			  'content' => $faker->text(50),
			  'lang'=>'1',
			  'published_at'=> $faker->dateTimeThisYear($max = 'now'),
			  'published' => $index % 2,
			  'created_at' => $faker->dateTimeThisYear($max = 'now'),
			  'updated_at' => $faker->dateTimeThisYear($max = 'now'),
 			]);
		}
	}

}