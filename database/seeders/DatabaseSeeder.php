<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run(): void
	{
		User::factory()
			->count(200)
			->create();

		User::query()
			->inRandomOrder()
			->limit(10)
			->get()
			->each(fn(User $user) => Project::factory()->count(10)->create(['created_by' => $user->id]));
	}
}
