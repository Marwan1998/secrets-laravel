<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SecretForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $secretID;
    public $title;
    public $content;
    public function __construct($type, $secretID=-1, $title='', $content='')
    {
        $this->type = $type;
        $this->secretID = $secretID;
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.secret-form');
    }
}
