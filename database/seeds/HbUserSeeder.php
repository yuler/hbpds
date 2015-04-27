.php
<?php

// Composer: "fzaninotto/faker": "v1.3.0"

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class HbUserSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		/*foreach(range(1, 2) as $index)
		{*/
			User::create([
			  'name' => 'admin',
			  'email' => 'admin@admin.com',
			  'password' => bcrypt('admin'),
 			]);
		// }
	}

}