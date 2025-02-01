<?php

namespace App\Livewire;
use Livewire\WithEvents; // Tambahkan ini
use Livewire\Component;

class Nav extends Component
{
    public function goToTasks()
    {
        $this->dispatch('navigate', '/tasks'); // Men-trigger event navigate dengan URL
    }

    public function goToLists()
    {
        $this->dispatch('navigate', '/'); // Men-trigger event navigate dengan URL
    }

    public function render()
    {
        return view('livewire.nav');
    }
}
