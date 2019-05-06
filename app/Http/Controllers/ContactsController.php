<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\Contacts\UpdateContactRequest;
use App\Http\Requests\Contacts\CreateContactRequest;
use Illuminate\Http\Requests;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index')->with('contacts', Contact::all());
    }

    public function create()
    {
        return view('contacts.form');
    }

    public function store(CreateContactRequest $request)
    {
        Contact::create([
            'email' => $request->email,
            'fax' => $request->fax,
            'phone' => $request->phone
        ]);

        session()->flash('success', 'Contact created successfully');

        return redirect(route('contacts.index'));
    }

    public function show(Contact $contact)
    {
        return view('contacts.show')->with('contact', $contact);
    }

    public function edit(Contact $contact)
    {
        return view('contacts.form')->with('contact', $contact);
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $contact->update([
            'email' => $request->email,
            'fax' => $request->fax,
            'phone' => $request->phone
        ]);

        session()->flash('success', 'Contact updated successfully');

        return redirect(route('contacts.index'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        session()->flash('success', 'Contact deleted successfully!');

        return redirect(route('contacts.index'));
    }
}
