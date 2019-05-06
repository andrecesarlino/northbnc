@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('contacts.index')}}">Contacts</a>
        </li>
        <li class="breadcrumb-item active">{{isset($contact) ? "Edit Contact" : 'Create Contact'}}</li>
    </ol>

    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($contact) ? 'Edit Contact' : 'Create Contact'}}
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



            <form action="{{isset($contact) ? route('contacts.update', $contact->id) : route('contacts.store')}}" method="POST" enctype="multipart/form-data">


                @csrf

                @if(isset($contact))
                    @method('PUT')
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{isset($contact) ? $contact->email : ''}}" placeholder="Email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fax">Fax:</label>
                        <input type="text" class="form-control" id="fax" name="fax" value="{{isset($contact) ? $contact->fax : ''}}" placeholder="Fax">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{isset($contact) ? $contact->phone : ''}}" placeholder="Phone">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($contact) ? 'Edit Contact' : 'Create Contact'}}</button>

            </form>

        </div>

    </div>
@endsection
