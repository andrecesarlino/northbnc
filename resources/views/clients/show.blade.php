@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Clients
        </div>

        <div class="card-body">


            <div class="d-flex  my-2">
                <a href="{{route('clients.create')}}" class="btn btn-success">Create new Client</a>
            </div>


            <ul class="list-group list-group-flush ">
                <li class="list-group-item list-group-item-action"><strong>Company Name:</strong> {{$client->nameCompany}}</li>
                <li class="list-group-item list-group-item-action"><strong>Title Contact:</strong> {{$client->titleContact}}</li>
                <li class="list-group-item list-group-item-action"><strong>Name Contact:</strong> {{$client->nameContact}}</li>
                <li class="list-group-item list-group-item-action"><strong>Address:</strong> {{$client->address}}</li>
                <li class="list-group-item list-group-item-action"><strong>City:</strong> {{$client->city}}</li>
                <li class="list-group-item list-group-item-action"><strong>Region:</strong> {{$client->region}}</li>
                <li class="list-group-item list-group-item-action"><strong>Zip Code:</strong> {{$client->zipCode}}</li>
                <li class="list-group-item list-group-item-action"><strong>Country:</strong> {{$client->country}}</li>
                <li class="list-group-item list-group-item-action"><strong>Phone:</strong> {{$client->phone}}</li>
                <li class="list-group-item list-group-item-action"><strong>Fax:</strong> {{$client->fax}}</li>
            </ul>

        </div>

    </div>
@endsection

