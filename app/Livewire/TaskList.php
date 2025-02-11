<?php

namespace App\Livewire;

use App\Models\task;
use App\Models\taskTags;
use Livewire\Component;

class TaskList extends Component
{
    public $task;

    public function mount($task)
    {
        $this->task = $task; // Sekarang $task adalah object, bukan string
    }

    public function delete()
    {
        if ($this->task) {
            $this->task->delete();
            $this->dispatch('taskDeleted'); // Emit event agar daftar diperbarui
        }
    }

    public function render()
    {
        return view('livewire.components.task-list');
    }
}
