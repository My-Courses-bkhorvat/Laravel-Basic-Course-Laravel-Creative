<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function create(){
        return view('contact.create');
    }

    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'email' => 'email',
            'subject' => 'string',
            'message' => 'string',
            'photo' => 'string'
        ]);
        Contact::create($data);

        return redirect()->route('contacts.index');
    }

    public function show(Contact $contact){
        return view('contact.show', compact('contact'));
    }

    public function edit(Contact $contact){
        return view('contact.edit', compact('contact'));
    }

    public function update(Contact $contact){
        $data = request()->validate([
            'name' => 'string',
            'email' => 'email',
            'subject' => 'string',
            'message' => 'string',
            'photo' => 'string'
        ]);
        $contact->update($data);
        return redirect()->route('contact.show', $contact->id);
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->route('contacts.index');
    }

}
