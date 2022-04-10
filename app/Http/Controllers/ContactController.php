<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

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

}
