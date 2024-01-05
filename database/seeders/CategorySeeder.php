<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		$categories = [
			[
				'name' => 'Junior Players',
				'age_group' => '5 to 10 years',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Elite Players',
				'age_group' => '10 to 16 Years',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Senior Players',
				'age_group' => '16 years +',
				'created_at' => now(),
				'updated_at' => now(),
			],

		];
		Player::insert($categories);
	}
}
