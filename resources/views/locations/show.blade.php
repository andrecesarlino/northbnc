@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('locations.index')}}">Locations</a>
        </li>
        <li class="breadcrumb-item active">Show Locations</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Locations
        </div>

        <div class="card-body">


            <div class=" my-2">
                <a href="{{route('locations.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Create new locations</a>
                <a href="{{route('locations.edit', $location->id)}}" class="btn btn-primary"><i class="fas fa-edit" style="color:white"></i> Edit locations</a>
                <button type="button" class="btn btn-danger" onclick="handleDelete({{$location->id}})"><i class="fas fa-trash-alt"></i> Delete</button>
            </div>
            <ul class="list-group list-group-flush ">


                <li class="list-group-item list-group-item-action"><strong>City:</strong> {{$location->city}}</li>
                <li class="list-group-item list-group-item-action"><strong>Address:</strong> {{$location->address}}</li>
                <li class="list-group-item list-group-item-action"><strong>State:</strong> {{$location->state}}</li>
                <li class="list-group-item list-group-item-action"><strong>CEP:</strong> {{$location->cep}}</li>
                <li class="list-group-item list-group-item-action"><strong>Country:</strong> {{$location->country}}</li>
            </ul>

        </div>

        <form action="" method="POST" id="deleteLocationsForm">

            @csrf

            @method('DELETE')


            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteLocationsForm">Delete Locations</h5>
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

            var form = document.getElementById('deleteLocationsForm')

            form.action = '/locations/' + id

            $('#deleteModal').modal('show')


        }
    </script>

@endsection

