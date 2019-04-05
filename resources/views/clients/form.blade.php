@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Create Clients
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
                        <input type="text" class="form-control" id="nameCompany" name="nameCompany" placeholder="Company Name">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="nameContact">Contact Name</label>
                        <input type="text" class="form-control" id="nameContact" name="nameContact" placeholder="Contact Name">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titleContact">Contact Title</label>
                        <input type="text" class="form-control" id="titleContact" name="titleContact" placeholder="Contact Title">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" id="region" name="region" placeholder="Region">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="zipCode">Zip Code</label>
                        <input type="text" class="form-control" id="zipCode" name="zipCode" placeholder="Zip Code">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fax">Fax</label>
                        <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax">
                    </div>

                </div>


                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($category) ? 'Edit Client' : 'Create Client'}}</button>

            </form>

        </div>

    </div>
@endsection

