<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\Locations\UpdateLocationRequest;
use App\Http\Requests\Locations\CreateLocationRequest;
use Illuminate\Http\Requests;

class LocationsController extends Controller
{
    public function index()
    {
        return view('locations.index')->with('locations', Location::all());
    }

    public function create()
    {
        return view('locations.form');
    }

    public function store(CreateLocationRequest $request)
    {
        Location::create([
            'city' => $request->city,
            'address' => $request->address,
            'state' => $request->state,
            'cep' => $request->cep,
            'country' => $request->country
        ]);

        session()->flash('success', 'Locations created successfully');

        return redirect(route('locations.index'));
    }

    public function show(Location $location)
    {
        return view('locations.show')->with('location', $location);
    }

    public function edit(Location $location)
    {
        return view('locations.form')->with('location', $location);
    }

    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update([
            'city' => $request->city,
            'address' => $request->address,
            'state' => $request->state,
            'cep' => $request->cep,
            'country' => $request->country
        ]);

        session()->flash('success', 'Location updated successfully');

        return redirect(route('locations.index'));
    }

    public function destroy(Location $location)
    {
        $location->delete();

        session()->flash('success', 'Location deleted successfully!');

        return redirect(route('locations.index'));
    }
}
