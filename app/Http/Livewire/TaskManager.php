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

  public $title;
  public $description;
  public $task_project_id;

  protected $listeners = ['createTask'];

  public function mount()
  {
    $this->projects = Project::all();
  }

  public function updatedProjectId()
  {
    $this->listTask($this->project_id);
    $this->task_project_id = $this->project_id;
  }

  public function listTask($project_id)
  {
    $this->tasks = Task::where('project_id', $project_id)
      ->orderBy('priority')
      ->get();

    // Emit an event to execute JavaScript function swap_tasks()
    $this->emit('selectProject');
  }

  public function deleteTask($task_id)
  {
    Task::destroy($task_id);
    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('priority')
      ->get();
  }

  public function createTask($data)
  {
    Task::create([
      'title'       => $data['title'],
      'project_id'  => $data['project_id'],
      'description' => $data['description']
    ]);

    $this->emit('taskCreated', $data);
  }

  public function render()
  {
    return view('livewire.task-manager');
  }
}
