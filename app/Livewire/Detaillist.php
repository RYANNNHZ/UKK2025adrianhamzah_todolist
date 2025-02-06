<?php

namespace App\Livewire;

use App\Models\lists;
use Livewire\Attributes\Title;
use Livewire\Component;

class Detaillist extends Component
{

    #[Title('list')]
    public $list;

    // Menangkap parameter dari URL
    public function mount($id)
    {
        $this->list = lists::where('id',$id)->first();
    }

    public function render()
    {

        return view('livewire.detaillist',['list' => $this->list]);
    }
}
