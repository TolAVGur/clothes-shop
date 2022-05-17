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
            'notes_text' => 'required',
            'shippingchoice' => 'required',
            'paymentmode' => 'required'
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
            'notes_text' => 'required',
            'shippingchoice' => 'required',
            'paymentmode' => 'required'
        ]);

        $order = new Order();
        $order_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];

        $order->shippingchoice = $this->shippingchoice;
        $order->name = Auth::user()->name;
        $order->email = Auth::user()->email;
        $order->phone = Auth::user()->phone;

        // доставка
        if ($this->shippingchoice == 'courier_kiev') {
            $order->zipcode = '02222';
            $order->city = 'Київ';
            $order->adress = $this->adress;
            $order->tax = 5;
        } elseif ($this->shippingchoice == 'across_ukr') {
            $order->zipcode = $this->zipcode;
            $order->city = $this->city;
            $order->adress = $this->adress;
            $order->tax = 10;
        } else {
            $order->zipcode = '02222';
            $order->city = 'Київ';
            $order->adress = 'Самовивіз';
            $order->tax = 0;
        }

        $order->notes_text = $this->notes_text;
        $order->status = 'ordered';
        $order->save();

        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
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
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order->id;
        $transaction->status = 'pending';

        if ($this->paymentmode == 'cod') {
            $transaction->mode = $this->paymentmode;
        } elseif ($this->paymentmode == 'card') {
            $transaction->mode = $this->paymentmode;
        } else
            $transaction->mode = $this->paymentmode;
        $transaction->save();


        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');
    }

    public function verifyForThankyou()
    {
        if ($this->thankyou) {
            return redirect()->route('thankyou');
        }
    }

    public function render()
    {
        //$this->verifyForThankyou();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
