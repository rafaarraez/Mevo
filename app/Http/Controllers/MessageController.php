<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

class MessageController extends Controller
{
    public function sendContact() {

        $data = request()->all();
        

        Mail::to('rafa.arraez.gue@gmail.com')->send(new ContactForm($data));
        
        return back();
    }
}
