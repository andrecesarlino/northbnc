@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('categories.index')}}">Categories</a>
        </li>
        <li class="breadcrumb-item active">{{isset($category) ? "Edit Category" : 'Create Category'}}</li>
    </ol>

    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($category) ? 'Edit Category' : 'Create Category'}}
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



            <form action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="POST" enctype="multipart/form-data">


                @csrf

                @if(isset($category))
                    @method('PUT')
                @endif

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nameCategory">Name Categorie</label>
                        <input type="text" class="form-control" id="nameCategory" name="nameCategory" value="{{isset($category) ? $category->nameCategory : ''}}" placeholder="nameCategory">

                    </div>
                </div>
                <div>
                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{isset($category) ? $category->description : ''}}" placeholder="description">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="figure">Figure</label>
                        <input type="file" class="form-control" id="figure" name="figure" value="{{isset($category) ? $category->figure : ''}}" placeholder="figure">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($category) ? 'Edit Category' : 'Create Category'}}</button>

            </form>

        </div>

    </div>
@endsection
