<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Collective\Html\FormFacade;
use Alert;

class ContactController extends Controller
{

  public function store(ContactFormRequest $request)
  {

    \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('website@at-gc.com');
        $message->to('questions@at-gc.com', 'Admin')->subject('Question Submitted');
    });

  Alert::success('Thank you for your interest. We will get back to you as soon as possible.')->persistent("Close");

      
    return \Redirect::route('home');
      


  }
}
