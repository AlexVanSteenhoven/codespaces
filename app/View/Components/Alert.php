<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $message;
    public string $type;

    /** Create a new component instance. */
    public function __construct(string $message, string $type = 'default')
    {
        $this->message = $message;
        $this->type = $type;
    }

    /** Get the view / contents that represent the component. */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
