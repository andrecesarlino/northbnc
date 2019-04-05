@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($client) ? 'Edit Client' : 'Create Client'}}
        </div>




        <div class="card-body">

            @if($errors->any())

                <div class="alert alert-danger">

                    <ul calss="list-group">

                        @foreach($errors->all() as $error)

                            <li>{{$error}}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <form action="{{isset($client) ? route('clients.update', $client->id) : route('clients.store')}}" method="POST">


                @csrf

                @if(isset($client))
                    @method('PUT')
                @endif

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nameCompany">Company Name</label>
                        <input type="text" class="form-control" id="nameCompany" name="nameCompany" value="{{isset($client) ? $client->nameCompany : ''}}" placeholder="Company Name">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="nameContact">Contact Name</label>
                        <input type="text" class="form-control" id="nameContact" name="nameContact" value="{{isset($client) ? $client->nameContact : ''}}" placeholder="Contact Name">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titleContact">Contact Title</label>
                        <input type="text" class="form-control" id="titleContact" name="titleContact" value="{{isset($client) ? $client->titleContact : ''}}" placeholder="Contact Title">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{isset($client) ? $client->address : ''}}" placeholder="Address">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{isset($client) ? $client->city : ''}}" placeholder="City">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" id="region" name="region" value="{{isset($client) ? $client->region : ''}}" placeholder="Region">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="zipCode">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode" value="{{isset($client) ? $client->zipCode : ''}}" placeholder="Zip Code">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{isset($client) ? $client->country : ''}}" placeholder="Country">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{isset($client) ? $client->phone : ''}}" placeholder="Phone">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" id="fax" name="fax" value="{{isset($client) ? $client->fax : ''}}" placeholder="Fax">
                    </div>

                </div>


                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($client) ? 'Edit Client' : 'Create Client'}}</button>

            </form>

        </div>

    </div>
@endsection