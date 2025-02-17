<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sideitem extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public function __construct($url)
    {
        return $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.partials.sideitem');
    }
}
