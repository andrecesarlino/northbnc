@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item active">index</li>
    </ol>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-user-friends"></i> Products
        </div>

        <div class="card-body">


            <div class="d-flex  my-2">
                <a href="{{route('products.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Create new Product</a>
            </div>


            <div class="table-responsive">


                <table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">


                    <th>Product Name</th>
                    <th>Quantiade</th>
                    <th>Preco Unitario</th>
                    <th>Unidade Em Estoque</th>
                    <th>Unidade Em Ordem</th>
                    <th>Nivel De Reposicao</th>
                    <th>Descontinuado</th>
                    <th class="col-sm-1">Action</th>

                    </thead>

                    <tbody>

                    @foreach($products as $product)

                        <tr>

                            <td>{{$product->nameProduct}}</td>
                            <td>{{$product->quantidade}}</td>
                            <td>{{$product->precoUnitario}}</td>
                            <td>{{$product->UnidadeEmEstoque}}</td>
                            <td>{{$product->UnidadeEmOrdem}}</td>
                            <td>{{$product->NivelDeReposicao}}</td>
                            <td>{{$product->descontinuado}}</td>
                            <td>

                                <a href="{{route('products.show', $product->id)}}" class="btn btn-secondary btn-sm"><i class="fas fa-binoculars" style="color:white"></i></a>
                                <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit" style="color:white"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="handleDelete({{$product->id}})"><i class="fas fa-trash-alt"></i></button>

                            </td>


                        </tr>

                    @endforeach

                    </tbody>

                </table>
            </div>

            <form action="" method="POST" id="deleteProductForm">

                @csrf

                @method('DELETE')


                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteProductForm">Delete Product</h5>
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
            var form = document.getElementById('deleteProductForm')

            form.action = '/products/' + id

            $('#deleteModal').modal('show')


        }
    </script>

@endsection

