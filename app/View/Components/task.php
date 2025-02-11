<?php

namespace App\View\Components;

use App\Models\task as ModelsTask;
use App\Models\taskTags;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class task extends Component
{
    /**
     * Create a new component instance.
     */
    public $status;
    public $id;
    public function __construct($status,$id)
    {
        return $this->status = $status;
        return $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.task');
    }
}
