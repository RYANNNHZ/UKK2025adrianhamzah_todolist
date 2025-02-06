<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Profile extends Component
{

    #[Title('profile')]

    public function render()
    {
        return view('livewire.profile');
    }
}
