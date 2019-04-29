<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\Clients\UpdateClientRequest;
use Illuminate\Http\Requests;
use App\Http\Requests\Clients\CreateClientRequest;



class ClientsController extends Controller
{
    public function index() {

        return view('clients.index')->with('clients', Client::all());

    }



    public function create()  {

        return view('clients.form');


    }



    public function store(CreateClientRequest $request) {

        $image = $request->photo->store('clients');

        Client::create([

            'name' => $request->name,
            'surName' => $request->surName,
            'cpfCnpj' => $request->cpfCnpj,
            'rg' => $request->rg,
            'dateBorn' => $request->dateBorn,
            'dateAdmission' => $request->dateAdmission,
            'photo' => $image
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
        $image = $request->photo->store('clients');

        $client->update([
            'name' => $request->name,
            'surName' => $request->surName,
            'cpfCnpj' => $request->cpfCnpj,
            'rg' => $request->rg,
            'dateBorn' => $request->dateBorn,
            'dateAdmission' => $request->dateAdmission,
            'photo' => $image

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
