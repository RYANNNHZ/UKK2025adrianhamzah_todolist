<?php

namespace App\Livewire;

use App\Models\lists;
use App\Models\task;
use Livewire\Attributes\Title;
use Livewire\Component;

class Detaillist extends Component
{

    #[Title('list')]
    public $list;
    public $task;

    // Menangkap parameter dari URL
    public function mount($id)
    {
        $this->list = lists::where('id',$id)->first();
    }

    public function createTask(){
        task::create([
            'lists_id' => $this->list->id,
            'task' => $this->task,
            'is_done' => 'not_done'
        ]);

        $this->task = '';
    }

    

    public function render()
    {

        return view('livewire.detaillist',['list' => $this->list]);
    }
}
