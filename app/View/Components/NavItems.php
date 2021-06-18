<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItems extends Component
{

    public $linkName;

    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $linkName)
    {
        $this->link = $link;
        $this->linkName = $linkName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-items');
    }
}
