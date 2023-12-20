<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public $info;
    public $message;
    public $name;


    /**
     * Create a new component instance.
     */
    public function __construct($info = '', $message = 'Manuel', $name = '')
    {
        //
        $this->info = $info;
        $this->message = $message;
        $this->name = $name;
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $request = request('name');
        return view('components.alert', compact('name'));
    }
}
