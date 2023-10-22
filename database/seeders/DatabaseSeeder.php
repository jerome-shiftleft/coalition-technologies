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
            ->count(5) // Create 5 projects
            ->create()
            ->each(function ($project) {
                $taskCount = rand(5, 10); // for each project, create around 5 to 10 tasks
                Task::factory()
                    ->count($taskCount)
                    ->create(['project_id' => $project->id]);
            });
    }
}
