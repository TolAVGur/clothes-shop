<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $id, $name, $phone, $shippingchoice, $paymentmode, $city, $adress, $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id, $name, $phone, $shippingchoice, $paymentmode, $city, $adress, $message)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->shippingchoice = $shippingchoice;
        $this->paymentmode = $paymentmode;
        $this->city = $city;
        $this->adress = $adress;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('livewire.mail.order');
    }
}
