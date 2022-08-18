<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PriceItem extends Component
{
    public  $name;

    public $amount;

    public $speed;

    public $freeSetup;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $amount,
        $speed,
        $freeSetup
    )
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->speed = $speed;
        $this->freeSetup = $freeSetup;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.price-item');
    }
}
