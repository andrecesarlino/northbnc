<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Clients\UpdateClientRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Clients\CreateClientRequest;



class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('clients.index')->with('clients', Client::all());

    }



    public function create()  {

        return view('clients.form');


    }



    public function store(CreateClientRequest $request) {

        Client::create([
            'nameCompany' => $request->nameCompany,
            'nameContact' => $request->nameContact,
            'titleContact' => $request->titleContact,
            'address' => $request->address,
            'city' => $request->city,
            'region' => $request->region,
            'zipCode' => $request->zipCode,
            'country' => $request->country,
            'phone' => $request->phone,
            'fax' => $request->fax
        ]);

        session()->flash('success', 'Client created successfully');

        return redirect(route('clients.index'));

    }



    public function show(Client $client)
    {
        return view('clients.show')->with('client', $client);
    }



    public function edit(Client $client)
    {
        return view('clients.form')->with('client', $client);
    }



    public function update(UpdateClientRequest $request, Client $client) {

        $client->update([

            'nameCompany' => $request->nameCompany,
            'nameContact' => $request->nameContact,
            'titleContact' => $request->titleContact,
            'address' => $request->address,
            'city' => $request->city,
            'region' => $request->region,
            'zipCode' => $request->zipCode,
            'country' => $request->country,
            'phone' => $request->phone,
            'fax' => $request->fax

        ]);

        session()->flash('success', 'Client updated successfully');

        return redirect(route('clients.index'));

    }



    public function destroy(Client $client) {
        $client->delete();

        session()->flash('success', 'Client deleted successfully!');

        return redirect(route('clients.index'));
    }


}
