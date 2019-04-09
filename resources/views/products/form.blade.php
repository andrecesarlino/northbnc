@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('products.index')}}">Products</a>
        </li>
        <li class="breadcrumb-item active">{{isset($product) ? "Edit Client" : 'Create Client'}}</li>
    </ol>

    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($product) ? 'Edit Client' : 'Create Client'}}
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



            <form action="{{isset($product) ? route('products.update', $product->id) : route('products.store')}}" method="POST">


                @csrf

                @if(isset($product))
                    @method('PUT')
                @endif

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nameCompany">Company Name</label>
                        <input type="text" class="form-control" id="nameCompany" name="nameCompany" value="{{isset($product) ? $product->nameProduct : ''}}" placeholder="Company Name">

                    </div>
                </div>


                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($product) ? 'Edit Client' : 'Create Client'}}</button>

            </form>

        </div>

    </div>
@endsection
