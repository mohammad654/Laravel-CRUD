<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LatestPosts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name ;
    public $init ;
    public  $string='Create a new component instance.';
    public function __construct($name,$init,$string)
    {
        $this->name=$name;
        $this->init=$init;
        $this->string ='Create a new component instance.';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.latest-posts');
    }
}
