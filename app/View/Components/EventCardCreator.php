<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventCardCreator extends Component
{
    /**
     * Create a new component instance.
     */

    public $event;

    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event-card-creator');
    }
}
