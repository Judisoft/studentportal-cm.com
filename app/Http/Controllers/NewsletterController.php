<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use Mail;
use Redirect;

class NewsletterController extends Controller
{
    /**
     *   @param Request $request
    */
    public function newsletter(Request $request)
    {
    $this->validate($request,
        [
            'email' => 'required|email|unique:newsletters'
            
        ], 
        $messages = [
            'unique' => 'This email is already on our newsletter list'
        ]
    );
        
    $newsletter = new Newsletter;
    $newsletter->email = $request->input('email');
    $newsletter->save();

        if($newsletter->id)
        {
            // Mail::to($newsletter->email)
            return back()->with('success', 'Subscription successful');
        }
        else
        {
            return back()->with('error', 'Sorry, something went wrong');
        }
    }
}
