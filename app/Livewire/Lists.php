<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\lists as ModelsLists;
use Livewire\Attributes\Title;

class Lists extends Component
{
    #[Title('lists')]
    protected $listeners = ['listAdded', 'listStored'];

    public function listStored()
    {
        session()->flash('success', 'list berhasil dibuat.');
    }


    public function render()
    {
        $lists = ModelsLists::all();
        return view('livewire.lists',['lists' => $lists,'header' => 'lists']);
    }
}
