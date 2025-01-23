<?php

namespace App\Livewire;

use App\Models\lists as ModelsLists;
use Livewire\Component;


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
        return view('livewire.lists', compact('lists'))->extends('layouts.app');
    }
}
