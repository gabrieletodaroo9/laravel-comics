<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class articleCard extends Component
{
    public $title;
    public $content;
    public $img;

    public function __construct($title, $content, $img)
    {
        $this->title = $title;
        $this->content = $content;
        $this->img = $img;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.article-card');
    }
}
