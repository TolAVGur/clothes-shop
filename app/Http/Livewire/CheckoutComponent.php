<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Order;
use Cart;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $shippingchoice; // свойство выбор доставки
    public $paymentmode;    // выбора оплаты
    //
    public $name;
    public $email;
    public $phone;
    public $zipcode;
    public $city;
    public $adress;
    public $notes_text;
    //
    public $thankyou;


    // обновление заказа 
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'zipcode' => 'required',
            'city' => 'required',
            'adress' => 'required',
            'notes_text' => 'required'
            //'shippingchoice' => 'required'
            //'paymentmode' => 'required'
        ]);
    }

    // сохранение заказа
    public function placeOrder()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'zipcode' => 'required',
            'city' => 'required',
            'adress' => 'required',
            'notes_text' => 'required'
        ]);

        $order = new Order();
        $order_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];

        $order->shippingchoice = $this->shippingchoice;
        $order->name = $this->name;
        $order->email = $this->email;
        $order->phone = $this->phone;

        if ($this->shippingchoice == 'courier_kiev' || $this->shippingchoice == 'across_ukr') {
            $order->zipcode = $this->zipcode;
            $order->city = $this->city;
            $order->adress = $this->adress;
            // $order->tax = 10.
        } else {
            $order->zipcode = '02222';
            $order->city = 'Київ';
            $order->adress = 'Самовивіз';
        }
        $order->notes_text = $this->notes_text;
        $order->status = 'ordered';
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->prise = $item->price;
            $orderItem->quentity = $item->qty;
            $orderItem->save();
        }

        // сохранение в таблице доставки
        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->name = $this->name;
        $shipping->email = $this->email;
        $shipping->phone = $this->phone;
        $shipping->zipcode = $this->zipcode;
        $shipping->city = $this->city;
        $shipping->adress = $this->adress;
        $shipping->save();

        // транзакция
        if ($this->paymentmode == 'cod') {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id = $order->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }

        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    // метод очистки корзины
    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function verifyForCheckout() {
        if (!Auth::check()) {
            return redirect()->route('login');
        } elseif ($this->thankyou) {
            return redirect()->route('thankyou');
        } elseif (!session()->get('checkout')){
            return redirect()->route('product.cart');
        }
    }

    public function render()
    {
        //$this->verifyForCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
