<?php

namespace App\View\Components\tabler;

use Illuminate\View\Component;

class navbarMenu extends Component
{
    /**
    * extra class.
    *
    * @var string
    */
//    public $class;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    // public function __construct($class)
    // {
    //     $this->class = $class;
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabler.navbar-menu');
    }
}
