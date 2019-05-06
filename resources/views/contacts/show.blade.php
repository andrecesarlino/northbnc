@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('contacts.index')}}">Contacts</a>
        </li>
        <li class="breadcrumb-item active">Show Contacts</li>
    </ol>


    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Contacts
        </div>

        <div class="card-body">


            <div class=" my-2">
                <a href="{{route('contacts.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Create new Contacts</a>
                <a href="{{route('contacts.edit', $contact->id)}}" class="btn btn-primary"><i class="fas fa-edit" style="color:white"></i> Edit Contacts</a>
                <button type="button" class="btn btn-danger" onclick="handleDelete({{$contact->id}})"><i class="fas fa-trash-alt"></i> Delete</button>
            </div>
            <ul class="list-group list-group-flush ">


                <li class="list-group-item list-group-item-action"><strong>Email:</strong> {{$contact->email}}</li>
                <li class="list-group-item list-group-item-action"><strong>Fax:</strong> {{$contact->fax}}</li>
                <li class="list-group-item list-group-item-action"><strong>Phone:</strong> {{$contact->phone}}</li>
            </ul>

        </div>

        <form action="" method="POST" id="deleteContactsForm">

            @csrf

            @method('DELETE')


            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteContactsForm">Delete Locations</h5>
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

            var form = document.getElementById('deleteContactsForm')

            form.action = '/contacts/' + id

            $('#deleteModal').modal('show')


        }
    </script>

@endsection

