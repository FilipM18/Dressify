<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CartItem extends Component
{
    public $item;
    
    public function __construct($item)
    {
        $this->item = $item;
    }

    public function render()
    {
        return view('components.cart-item');
    }
}
