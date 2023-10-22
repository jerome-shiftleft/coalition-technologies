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
            ->count(10)
            ->create()
            ->each(function ($project) {
                $taskCount = rand(3, 5);

                Task::factory()
                    ->count($taskCount)
                    ->create(['project_id' => $project->id]);
            });
    }
}
