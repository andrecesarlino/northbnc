@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('clients.index')}}">Clients</a>
        </li>
        <li class="breadcrumb-item active">{{isset($client) ? "Edit Client" : 'Create Client'}}</li>
    </ol>

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



            <form action="{{isset($client) ? route('clients.update', $client->id) : route('clients.store')}}" method="POST" enctype="multipart/form-data">


                @csrf

                @if(isset($client))
                    @method('PUT')
                @endif

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{isset($client) ? $client->name : ''}}" placeholder="Name">

                    </div>

                    <div class="form-group col-md-6">
                        <label for="surName">Surname</label>
                        <input type="text" class="form-control" id="surName" name="surName" value="{{isset($client) ? $client->surName : ''}}" placeholder="Surname">
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cpfCnpj">CPF/CNPJ</label>
                        <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj" value="{{isset($client) ? $client->cpfCnpj : ''}}" placeholder="CPF/CNPJ">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="rg">RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" value="{{isset($client) ? $client->rg : ''}}" placeholder="rg">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="dateBorn">Date Born</label>
                        <input type="date" class="form-control" id="dateBorn" name="dateBorn" value="{{isset($client) ? $client->dateBorn : ''}}" placeholder="Date Born">
                    </div>


                    <div class="form-group col-md-6">
                        <label for="dateAdmission">date Admission</label>
                        <input type="date" class="form-control" id="dateAdmission" name="dateAdmission" value="{{isset($client) ? $client->dateAdmission : ''}}" placeholder="dateAdmission">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>

                </div>



                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($client) ? 'Edit Client' : 'Create Client'}}</button>

            </form>

        </div>

    </div>
@endsection
