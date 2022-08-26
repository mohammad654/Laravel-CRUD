<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inline extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<span>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
   <span><h1>{{$name}}</h1> {{ $slot }}</span>
</span>
blade;
    }
}
