<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function sendEmail(Request $request) {

        $request->validate([
            'name'=>'required | min:2 | max:60 | string',
            'email'=>'required | min:5 | max:80 | string | email',
            'msg'=>'required | min:5 | max:600 | string'
        ]);
        
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg
        ];  
        
        Mail::to('santosfm22@hotmail.com')->send(new ContactMail($details));
        return redirect('/contact')->with('contact_message_sent', 'Thank you for getting in touch. Your message has been sent successfully. Will reply as soon as possible.');
        //return back()->with('contact_message_sent', 'Thank you for getting in touch. Your message has been sent successfully. Will reply as soon as possible.');
        //ORIGINAL return redirect('/home')->with('message_sent','Thank you for getting in touch. Your message has been sent successfully. Will reply as soon as possible.');
    }        
}
