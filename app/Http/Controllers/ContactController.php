<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
    
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'Message was sent');

    }


    public function allData() 
    {
        $contact = new Contact;
        return view('messages', ['data' => $contact->all()]);
        
    }

    public function ShowOneMessage($id)
    {
        $contact = new Contact;
        return view('one-message', ['data' => $contact->find($id)]);
        
    }

    public function UpdateMessage($id)
    {

        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);

    }

    public function UpdateMessageSubmit($id, ContactRequest $req)
    {
    
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Message was updated');

    }

    public function DeleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message was deleted');
    }
};