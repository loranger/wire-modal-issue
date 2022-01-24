<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartButton extends Component
{

    public $amount = 0;

    protected $listeners = ['cartUpdated' => 'refreshCartAmount'];

    public function boot()
    {
        $this->refreshCartAmount();
    }

    public function refreshCartAmount()
    {
        if(session()->has('cart'))
        {
            $this->amount = session()->get('cart')->count();
        }
    }

    public function render()
    {
        return view('livewire.cart-button');
    }
}
