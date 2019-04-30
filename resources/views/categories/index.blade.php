@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Categories</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Categories
        </div>

        <div class="card-body">


            <div class="d-flex  my-2">
                <a href="{{route('categories.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Create new Categorie</a>
            </div>


            <div class="table-responsive">


                <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">


                    <th>NameCategorie</th>
                    <th>Description</th>
                    <th>Figure</th>
                    <th class="col-sm-1">Action</th>

                    </thead>

                    <tbody>

                    @foreach($categories as $category)

                        <tr>

                            <td>{{$category->nameCategory}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <img src="{{asset('storage/'.$category->figure)}}" alt="" width="100px" height="100px">
                            </td>
                            <td>
                                <a href="{{route('categories.show', $category->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-binoculars" style="color:white"></i></a>
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit" style="color:white"></i></a>

                                <button type="button" class="btn btn-danger btn-sm" onclick="handleDelete({{$category->id}})"><i class="fas fa-trash-alt"></i></button>

                            </td>


                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>

            <form action="" method="POST" id="deleteCategoriesForm">

                @csrf

                @method('DELETE')


                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteCategoriesForm">Delete Categorie</h5>
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

    </div>
@endsection
@section('scripts')

    <script>

        function handleDelete(id) {



            var form = document.getElementById('deleteCategoriesForm')

            form.action = '/categories/' + id

            $('#deleteModal').modal('show')


        }
    </script>

@endsection

