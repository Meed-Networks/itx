<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestimonyItem extends Component
{
    protected $colors = ['red', 'pink', "yellow"];

    public $gradient;

    public $statement;

    public $name;

    public $address;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($statement, $name, $address)
    {
        $this->gradient = $this->shuffleGradient($this->colors);
        $this->statement = $statement;
        $this->name = $name;
        $this->address = $address;
    }

    private function shuffleGradient($gradient)
    {
        if (!is_array($gradient)) return $gradient;

        shuffle($gradient);
        $random = array();
        foreach ($gradient as $key)
            $random[] = $key;

        $stmt = "from-$gradient[0]-400 via-$gradient[1]-500 to-$gradient[2]-500";
        return $stmt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimony-item');
    }
}
