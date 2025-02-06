<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('halaman login')]
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.blank')->section('content');
    }
}
