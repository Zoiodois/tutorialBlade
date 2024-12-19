<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{

    
    /**
     * Create a new component instance.
     */
    public function __construct(
        // If any variavel is passed in the construct, it will be removed from $attributes
        public string $title  //-> off for using in $attributes 
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
