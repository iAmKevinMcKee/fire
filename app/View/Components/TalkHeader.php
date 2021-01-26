<?php

namespace App\View\Components;

use App\Models\Talk;
use Illuminate\View\Component;

class TalkHeader extends Component
{
    public $talk;

    /**
     * Create a new component instance.
     *
     * @param  Talk  $talk
     */
    public function __construct(Talk $talk)
    {
        $this->talk = $talk;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.talk-header');
    }
}
