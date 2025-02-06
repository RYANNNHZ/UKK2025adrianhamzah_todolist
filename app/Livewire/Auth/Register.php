<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class Register extends Component
{
    #[Title('halaman login')]
    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.blank')->section('content');
    }
}
