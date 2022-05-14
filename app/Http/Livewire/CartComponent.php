<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    // метод добавления единицы товара
    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId, $qty);
    }

    // метод вычтиания единицы товара
    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId, $qty);
    }

    // метод удаления отдельного товара в корзине
    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        session()->flash('messqge', 'Вибраний товар видалено з кошика!');
    }

    // метод очистки корзины
    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
    }

    // переход на стр заказа с аутентификацией
    public function checkout()
    {
        if (Auth::check()) {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('login');
        }
    }

    // считать доставку ----------------------------------------------------------------- ??????
    public $checkshipping; // проверка доставки
    public $selfpickup = 0;
    public function setAmountForDelivery()
    {
        /*if ($this->checkshipping == 'across_ukr') {            
        } else if ($this->checkshipping == 'courier_kiev') {
        } else {
        }*/
    }

    // пересчет стоимости для оформления
    public function setAmountForCheckout()
    {
        //
        if (!Cart::instance('cart')->count() > 0) {
            session()->forget('checkout');
            return;
        }

        if (session()->has('coupon')) {
            session()->put('checkout', [
                'discount' => $this->discount,
                'subtotal' => $this->subtotalAfterDiscount,
                'tax' => $this->taxAfterDiscount,
                'total' => $this->totalAfterDiscount
            ]);
        } else {
            session()->put('checkout', [
                'discount' => 0,
                'subtotal' => Cart::instance('cart')->subtotal(),
                'tax' => Cart::instance('cart')->tax(),
                'total' => Cart::instance('cart')->total()
            ]);
        }
    }

    public function render()
    {
        $this->setAmountForCheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
