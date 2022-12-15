<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Mail\MailFormMail;

class CommonController extends Controller
{
    //
    public function contactForm(Request $reqest){
        $reqest->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $contact_data = [];
        $contact_data['name'] = $reqest->name;
        $contact_data['email'] = $reqest->email;
        $contact_data['phone'] = $reqest->phone;
        $contact_data['message'] = $reqest->message;

        Mail::to('info@nustart.org')->send(new ContactFormMail($contact_data));

        return redirect()->back()->withSuccess('Email Send!');
    }
    
     public function mailForm(Request $reqest){
         $reqest->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        
        $mail_data = [];
        $mail_data['name'] = $reqest->name;
        $mail_data['email'] = $reqest->email;
        Mail::to('info@nustart.org')->send(new MailFormMail($mail_data));
        return redirect()->back()->withSuccess('Thanks to Join Us! We will contact you soon!');
     }
}
