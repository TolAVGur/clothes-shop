<?php

namespace App\Http\Livewire;

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    public $message;
    //
    public $thankyou;

    // обновление заказа 
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            //'name' => 'required',
            //'email' => 'required|email',
            'phone' => 'required|numeric',
            //'zipcode' => 'required|numeric',
            //'city' => 'required',
            //'adress' => 'required',
            //'message' => 'required',
            //'shippingchoice' => 'required',
            //'paymentmode' => 'required'
        ]);
    }

    // сохранение заказа
    public function placeOrder()
    {
        $this->validate([
            //'name' => 'required',
            //'email' => 'required|email',
            'phone' => 'required|numeric',
            //'zipcode' => 'required|numeric',
            //'city' => 'required',
            //'adress' => 'required',
            //'shippingchoice' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];

        /*fix: без "," в decimal */
        $order->subtotal = str_replace(',', '', $order->subtotal);
        $order->discount = str_replace(',', '', $order->discount);
        $order->tax = str_replace(',', '', $order->tax);
        $order->total = str_replace(',', '', $order->total);


        $order->name = Auth::user()->name;
        $order->email = Auth::user()->email;
        if (Auth::user()->phone != 'no') {
            $order->phone = Auth::user()->phone;
            // *** ----------------------------------------??? не працює якщо в юзера вже є телефон ?????
        } else {
            // *** додати phone у профіль юзера
            $order->phone = $this->phone;
        }

        // доставка
        if ($this->shippingchoice == 'across_ukr') {
            $order->shippingchoice = $this->shippingchoice;
            $order->tax = 5;
            $order->zipcode = $this->zipcode;
            $order->city = $this->city;
            $order->adress = $this->adress;
        } elseif ($this->shippingchoice == 'courier_kiev') {
            $order->shippingchoice = $this->shippingchoice;
            $order->tax = 10;
            $order->zipcode = '02222';
            $order->city = 'Київ';
            $order->adress = $this->adress;
        } else {
            $order->shippingchoice = 'selfpickup';
            $order->zipcode = '02222';
            $order->city = 'Київ';
            $order->adress = 'Магазин';
            $order->tax = 0;
        }
        $order->message = $this->message;
        $order->status = 'ordered';

        $order->save();

        // товар
        foreach (Cart::instance('cart')->content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;

            $orderItem->save();
        }

        // сохранение в таблице доставки
        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->name = Auth::user()->name;
        $shipping->phone = $order->phone;
        $shipping->email = Auth::user()->email;
        $shipping->adress = $order->adress;
        $shipping->city = $order->city;
        $shipping->zipcode = $order->zipcode;
        $shipping->message = $order->message;

        $shipping->save();

        // транзакция - выбранная оплата
        $transaction = new Transaction();
        $transaction->user_id = $order->user_id;
        $transaction->order_id = $order->id;
        if ($this->paymentmode == 'paypal') {
            $transaction->mode = $this->paymentmode;
        } elseif ($this->paymentmode == 'card') {
            $transaction->mode = $this->paymentmode;
        } else
            $transaction->mode = 'cod';
        $transaction->save();

        // відправка email покупцю
        Mail::to($order->email)->send(new OrderMail(
            $order->id, 
            $order->name, 
            $order->phone, 
            $this->shippingchoice, 
            $this->paymentmode, 
            $shipping->city,
            $shipping->adress,
            $shipping->message
        ));
        
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
        $this->verifyForThankyou();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
