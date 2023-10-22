<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class DeleteTask extends Component
{
  public $task_id;
  public $showModal = false;

  public function showModalHanlder($task_id)
  {
    $this->showModal = true;
  }

  public function render()
  {
    return view('livewire.delete-task');
  }
}
