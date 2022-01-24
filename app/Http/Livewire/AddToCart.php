<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddToCart extends ModalComponent
{

    public $carts;
    public $products;

    public function boot()
    {
        $this->products = session('cart', collect([]));
    }

    public function mount($product)
    {
        $quantity = $this->products->get($product, 0);
        $this->setProductToCart($product, ++$quantity);
    }

    public function remove($product)
    {
        $this->setProductToCart($product, 0);
    }

    public function setProductToCart($product, Int $quantity)
    {
        if ($quantity < 1) {
            $this->products->forget($product);
        } else {
            $this->products->put($product, $quantity);
        }
        session(['cart' => $this->products]);

        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
