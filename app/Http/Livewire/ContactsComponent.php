<?php

namespace App\Http\Livewire;

use App\Mail\FeedbackMail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactsComponent extends Component
{
    public $name;                   // ім'я
    public $email;                  // email
    public $subject;                // тема повідомлення
    public $message;                // текст повідомлення

    public function feedbackMail()
    {
        if (!Auth::check()) {
            $name = $this->name;
            $email = $this->email;
        } else {
            $name = Auth::user()->name;
            $email = Auth::user()->email;
        }

        $subject = $this->subject;
        $message = $this->message;
        Mail::to('clothes.shop@domain.com')->send(new FeedbackMail($name, $email, $subject, $message));
        return redirect()->route('feedback');
    }

    public function render()
    {
        return view('livewire.contacts-component')->layout('layouts.base');
    }
}
