<?php

namespace App\Livewire;

use App\Models\lists;
use Livewire\Component;

class ListCreate extends Component
{

    public $title;
    public $description;

    public function store(){
        lists::create([
            'user_id' => '6a3ba90c-dfa8-11ef-aaee-d4258b67b763',
            'title' => $this->title,
            'description' => $this->description,
            'status' => 'pending'
        ]);

        $this->title = '';
        $this->description = '';

        $this->dispatch('listAdded');
    }

    public function render()
    {
        return view('livewire.list-create')->extends('layouts.app');
    }
}
