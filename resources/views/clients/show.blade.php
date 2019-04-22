@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('clients.index')}}">Clients</a>
        </li>
        <li class="breadcrumb-item active">Show client</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Clients
        </div>

        <div class="card-body">


            <div class=" my-2">
                <a href="{{route('clients.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Create new Client</a>
                <a href="{{route('clients.edit', $client->id)}}" class="btn btn-primary"><i class="fas fa-edit" style="color:white"></i> Edit Client</a>
                <button type="button" class="btn btn-danger" onclick="handleDelete({{$client->id}})"><i class="fas fa-trash-alt"></i> Delete</button>
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

        <form action="" method="POST" id="deleteClientForm">

            @csrf

            @method('DELETE')


            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteClientForm">Delete Client</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-bold">


                                Are you sure you want to delete?


                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>

    </div>
@endsection
@section('scripts')

    <script>

        function handleDelete(id) {



            var form = document.getElementById('deleteClientForm')

            form.action = '/clients/' + id

            $('#deleteModal').modal('show')


        }
    </script>

@endsection

