<?php

namespace App\Livewire;

use App\Models\lists;
use Livewire\Component;

class Create extends Component
{
    public $content;
    public $title;
    public $description;

    public function store(){
        if($this->title && $this->description){
            lists::create([
                'user_id' => '927b62d4-d93a-11ef-be28-408d5c651cf1',
                'title' => $this->title,
                'description' => $this->description,
                'status' => 'pending'
            ]);
        }else{
            
        }


        $this->title = '';
        $this->description = '';

        $this->dispatch('listAdded');
    }


    public function mount($content)
    {
        $this->content = $content;
    }
    public function render()
    {
        return view('livewire.create');
    }



}
