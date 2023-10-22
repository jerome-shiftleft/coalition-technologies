<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TasksList extends Component
{
    public $task;
    
    public function render()
    {
        return view('livewire.tasks-list');
    }
}
