@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('locations.index')}}">Categories</a>
        </li>
        <li class="breadcrumb-item active">{{isset($location) ? "Edit Location" : 'Create Location'}}</li>
    </ol>

    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($location) ? 'Edit Location' : 'Create Location'}}
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



            <form action="{{isset($location) ? route('locations.update', $location->id) : route('locations.store')}}" method="POST" enctype="multipart/form-data">


                @csrf

                @if(isset($location))
                    @method('PUT')
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" name="city" value="{{isset($location) ? $location->city : ''}}" placeholder="City">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{isset($location) ? $location->address : ''}}" placeholder="Address">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="state">State:</label>
                        <input type="text" class="form-control" id="state" name="state" value="{{isset($location) ? $location->state : ''}}" placeholder="State">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="{{isset($location) ? $location->cep : ''}}" placeholder="CEP">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Country:</label>
                        <input type="text" class="form-control" id="country" name="country" value="{{isset($location) ? $location->country : ''}}" placeholder="Country">
                    </div>
                </div>


                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($category) ? 'Edit Location' : 'Create Location'}}</button>

            </form>

        </div>

    </div>
@endsection
