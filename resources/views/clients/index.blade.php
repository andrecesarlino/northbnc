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


            <div class="table-responsive">


                <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">


                    <th>Company Name</th>
                    <th>Contact Name</th>
                    <th>Title</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>Zip Code</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th class="col-sm-1">Action</th>

                    </thead>

                    <tbody>

                    @foreach($clients as $client)

                        <tr>

                            <td>{{$client->nameCompany}}</td>
                            <td>{{$client->nameContact}}</td>
                            <td>{{$client->titleContact}}</td>
                            <td>{{$client->address}}</td>
                            <td>{{$client->city}}</td>
                            <td>{{$client->region}}</td>
                            <td>{{$client->zipCode}}</td>
                            <td>{{$client->country}}</td>
                            <td>{{$client->phone}}</td>
                            <td>{{$client->fax}}</td>
                            <td>
                                <a href="{{route('clients.show', $client->id)}}" class="btn btn-info btn-sm"><i class="fas fa-binoculars" style="color:white"></i></a>
                                <a href="#" class="btn btn-secondary btn-sm"><i class="fas fa-edit" style="color:white"></i></a>

                                <button type="button" class="btn btn-danger btn-sm" onclick="handleDelete({{$client->id}})"><i class="fas fa-trash-alt"></i></button>

                            </td>


                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>

    </div>
@endsection
