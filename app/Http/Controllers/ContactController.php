<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect('/contact')->with('success', 'Message was successfully sent');
    }

    public function contact()
    {
        $data = Contact::all();;
        return view('contact', ['data' => Contact::all() ]);
    }
}
