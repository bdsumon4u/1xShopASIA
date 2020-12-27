<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Instruction extends Component
{
    /**
     * @var int
     */
    public $step;

    /**
     * Create a new component instance.
     *
     * @param int $step
     */
    public function __construct(int $step)
    {
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.instruction');
    }
}
