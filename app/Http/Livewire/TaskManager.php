<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Task;

class TaskManager extends Component
{

  public $projects;
  public $project_id;
  public $tasks;
  public $task_id;

  public function mount()
  {
    $this->projects = Project::all();
  }

  public function list_task($task_id) {

  }

  public function render()
  {
    return view('livewire.task-manager');
  }
}
