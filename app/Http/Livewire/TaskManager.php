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
  public $validation_error;

  protected $listeners = ['createTask', 'updateTask', 'reorderTasks'];

  public function mount()
  {
    $this->projects = Project::all();
    $this->validation_error = '';
  }

  public function updatedProjectId()
  {
    $this->listTask($this->project_id);
  }

  public function listTask($project_id)
  {
    $this->project_id = $project_id;

    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('priority')
      ->orderBy('created_at')
      ->get();

    // Emit an event to execute JavaScript function swap_tasks()
    //$this->emit('selectProject');
    $this->dispatchBrowserEvent('selectProject');
  }

  public function deleteTask($task_id)
  {
    Task::destroy($task_id);
    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('priority')
      ->orderBy('created_at')
      ->get();
  }

  public function createTask($data)
  {
    if (empty($data['project_id']) || empty($data['title'])) {
      $this->validation_error = 'Please select a project and provide a title.';
    } else {
      $this->validation_error = null;

      $highest_priority = Task::where('project_id', $data['project_id'])
        ->orderBy('priority', 'desc')
        ->value('priority');

      $priority = $highest_priority + 1;

      Task::create([
        'title'       => $data['title'],
        'project_id'  => $data['project_id'],
        'description' => $data['description'],
        'priority'       => $priority
      ]);

      $this->project_id = $data['project_id'];

      $this->tasks = Task::where('project_id', $this->project_id)
        ->orderBy('priority')
        ->orderBy('created_at')
        ->get();

      //$this->emit('taskCreated', $data);
      $this->dispatchBrowserEvent('taskCreated', [
        'data' => $data,
        'priority' => $priority
      ]);
    } // end of if (empty($data['project_id']) || empty($data['title']))
  } // end of public function createTask($data)

  public function updateTask($data) {

  } // end of public function updateTask($data)

  public function reorderTasks($tasks)
  {
    foreach ($tasks as $key => $task) {
      $id = (int)$task['data_id'];
      $new_priority = (int)$task['new_priority'];
      $query = Task::find($id);
      $query->priority = $new_priority;
      $query->save();
    }

    $this->tasks = Task::where('project_id', $this->project_id)
      ->orderBy('priority')
      ->orderBy('created_at')
      ->get();
  } // end of public function reorderTasks

  public function render()
  {
    return view('livewire.task-manager');
  }
} // end of class TaskManager extends Component