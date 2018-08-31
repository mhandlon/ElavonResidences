<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function home()
    {
        return view('default' );
    }

    public function post(Request $request)
    {
        //var_dump($request);

        if ($request->isMethod('post')) {

            $first_name = $request->input('first-name');
            $last_name = $request->input('last-name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $subject = $request->input('subject');
            $message =$request->input('message');

            //scrub data

            $contact = new Contact;
            $contact->first_name = $first_name;
            $contact->last_name = $last_name;
            $contact->email = $email;
            $contact->phone = $phone;
            $contact->subject = $subject;
            $contact->message = $message;

            $contact->save();

            $request->session()->flash('message', 'Someone will be in contact with you!');

            return view('default');
        }

        return view('404');
    }

}