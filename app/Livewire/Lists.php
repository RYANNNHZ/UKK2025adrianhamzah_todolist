<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\lists as ModelsLists;


class Lists extends Component
{

    protected $listeners = ['listAdded', 'listStored'];

    public function listStored()
    {
        session()->flash('success', 'list berhasil dibuat.');
    }

    public function render()
    {
        $lists = ModelsLists::all();
        return view('livewire.lists', compact('lists'));
    }
}
