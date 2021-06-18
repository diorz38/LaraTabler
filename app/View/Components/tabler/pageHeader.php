<?php

namespace App\View\Components\tabler;

use Illuminate\View\Component;

class pageHeader extends Component
{
    public $title,$subtitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$subtitle)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        // $this->button = $button;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tabler.page-header');
    }
}
