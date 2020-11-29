<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {

    public function submit(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было отправлено');
    }

    public function allData()
    {
        $contact = new Contact;
//        $contact->orderBy('id', 'desc')->skip(1)->take(2)->get() - варианты команд(что можно делать).
        return view('messages', ['data' => $contact->where('subject', '=', 'sdsdsd')->get()]);
    }
}
