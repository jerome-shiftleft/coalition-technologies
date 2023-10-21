<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Project::factory()
            ->count(5)
            ->has(Task::factory()->count(random_int(3, 5)))
            ->create();

    }
}
