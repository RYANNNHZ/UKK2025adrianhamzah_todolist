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
            'user_id' => '927b62d4-d93a-11ef-be28-408d5c651cf1',
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
        return view('livewire.list-create');
    }
}
