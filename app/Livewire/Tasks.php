<?php

namespace App\Livewire;

use App\Models\task;
use Livewire\Component;
use Livewire\WithEvents; // Tambahkan ini

class Tasks extends Component
{
    public function render()
    {
        return view('livewire.tasks')->extends('layouts.app');  // Gunakan layout 'home' atau layout yang sesuai
    }

}
