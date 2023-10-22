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

  public $select_message;

  public function mount()
  {
    $this->projects = Project::all();
  }

  public function updatedProjectId() {
    $select_message = 'Project: '.$this->project_id;
    $this->select_message = $select_message;
    $this->list_task($this->project_id);
  }

  public function list_task($project_id) {
    $this->select_message = 'listing task under project '.$project_id;
    $tasks = Task::where('project_id', $project_id)->get();
    $this->tasks = $tasks;
  }

  public function render()
  {
    return view('livewire.task-manager');
  }
}
