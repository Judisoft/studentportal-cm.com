<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactsController extends JoshController
{
    /**
     * @param Request $request
     * return Response
     * 
     */
    public function storeContact(Request $request)
    {
        $request->all();
        $contact = new Contact;
        $contact->name = $request->input('first_name'). ' '.$request->input('last_name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->institution = $request->input('institution');
        $contact->country = $request->input('country');
        $contact->message = $request->input('message');
        $contact->telephone = $request->input('telephone');
        $contact->save();

        if($contact->id)
        {
            return view('contact')->with('success', 'Message sent');
        }
        else {
            return view('contact')->with('error', 'Message sent failed');
        }
    }
}
