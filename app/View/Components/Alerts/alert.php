<?php

namespace App\View\Components\Alerts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{   

    private array $colors = [
        'green' => 'success', 
    'red' => 'danger', 
    'orange' => 'warning', 
    'blue' => 'info', 
    ];
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type = '', //unsed, updated for colors array
        public string $color = 'red',
    )
    {
        //
    }

    public function get_color(){
        return $this->colors[$this->color] ?? 'success';
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alerts.alert');
    }
}
