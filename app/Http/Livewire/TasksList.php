<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class TasksList extends Component
{
  public $task;
  public $task_id;

  public function deleteTask($task_id) {
    Task::destroy($task_id);    
  }

  public function render()
  {
    return view('livewire.tasks-list');
  }
}
