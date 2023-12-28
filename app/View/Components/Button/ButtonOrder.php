<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class ButtonOrder extends Component
{
    public $url, $title;

    public function __construct($url, $title)
    {
        $this->url = $url;
        $this->title = $title;
    }

    public function render()
    {
        return view('components.button.button-order');
    }
}
