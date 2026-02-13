<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class homeCard extends Component
{
    public $comic;

    public function __construct($comic)
    {
     $this->comic = $comic;  
    }
    
    public function render(): View|Closure|string
    {
        return view('components.home-card');
    }
}
