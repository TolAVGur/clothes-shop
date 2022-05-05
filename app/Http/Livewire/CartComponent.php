<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{

    // метод добавления единицы товара
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }

    // метод вычтиания единицы товара
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    // метод удаления отдельного товара в корзине
    public function destroy($rowId) {
        Cart::remove($rowId);
        session()->flash('messqge', 'Вибраний товар видалено з кошика!');
    }

    // метод очистки корзины
    public function destroyAll() {
        Cart::destroy();
        //session()->flash('messqge', 'Всі обрані товари видалено з кошика!');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
