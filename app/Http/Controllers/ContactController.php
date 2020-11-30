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
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact;
        return view('one-message', [ 'data' => $contact->find($id)]);
    }

    public function updateMessage($id)
    {
        $contact = new Contact;
        return view('update-message', [ 'data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contacts-data')->with('success', 'Запись была удалена');
    }
}
