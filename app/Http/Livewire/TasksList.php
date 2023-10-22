<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TasksList extends Component
{
  public $task;
  public $task_id;
  public $delete_message;

  public function deleteTask($task_id) {
    $this->delete_message = 'Deleting '.$task_id;
    //$this->emitTo('task-manager', 'deleteTaskHandler', $task_id);
    $this->emit('deleteTask', $task_id);
  }

  public function render()
  {
    return view('livewire.tasks-list');
  }
}
