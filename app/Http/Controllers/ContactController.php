<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends RequestController
{
    public function rules()
    {
        if ($this->isMethod('GET')) {
            return [];
        }

        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return view('contact-form');
        }

        Mail::send(new ContactMail($this->validationData()));

        return back()->with('success', 'Thanks For Contacting Us.');
    }
}
