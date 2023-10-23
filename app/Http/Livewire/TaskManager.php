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

  protected $listeners = ['createTask', 'reorderTasks'];

  public function mount()
  {
    $this->projects = Project::all();
  }

  public function updatedProjectId()
  {
    $this->listTask($this->project_id);
  }

  public function listTask($project_id)
  {
    $this->project_id = $project_id;

    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('order')
      ->orderBy('created_at')
      ->get();

    // Emit an event to execute JavaScript function swap_tasks()
    $this->emit('selectProject');
  }

  public function deleteTask($task_id)
  {
    Task::destroy($task_id);
    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('order')
      ->orderBy('created_at')
      ->get();
  }

  public function createTask($data)
  {
    Task::create([
      'title'       => $data['title'],
      'project_id'  => $data['project_id'],
      'description' => $data['description']
    ]);

    $this->project_id = $data['project_id'];

    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('order')
      ->orderBy('created_at')
      ->get();

    $this->emit('taskCreated', $data);
  }

  public function reorderTasks($tasks)
  {
    foreach ($tasks as $key => $task) {
      $id = (int)$task['id'];
      $query = Task::find($id);
      $query->order = $key;
      $query->save();
    }

    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('order')
      ->orderBy('created_at')
      ->get();
  } // end of public function reorderTasks

  public function render()
  {
    return view('livewire.task-manager');
  }
  
} // end of class TaskManager extends Component