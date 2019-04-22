@extends('layouts.app')

@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('products.index')}}">Products</a>
        </li>
        <li class="breadcrumb-item active">{{isset($product) ? "Edit Product" : 'Create Product'}}</li>
    </ol>

    <div class="card">
        <div class="card-header">
                <i class="fas fa-user-friends"></i> {{isset($product) ? 'Edit Product' : 'Create Product'}}
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
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" id="productName" name="nameProduct" value="{{isset($product) ? $product->nameProduct : ''}}" placeholder="Product Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade" value="{{isset($product) ? $product->quantidade : ''}}" placeholder="Quantidade">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="precoUnitario">Preço Unitário</label>
                        <input type="text" class="form-control" id="precoUnitario" name="precoUnitario" value="{{isset($product) ? $product->precoUnitario : ''}}" placeholder="Preco Unitario">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UnidadeEmEstoque">Unidade em Estoque</label>
                        <input type="text" class="form-control" id="UnidadeEmEstoque" name="UnidadeEmEstoque" value="{{isset($product) ? $product->UnidadeEmEstoque : ''}}" placeholder="Unidade em Estoque">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="UnidadeEmOrdem">Unidade em Ordem</label>
                        <input type="text" class="form-control" id="UnidadeEmOrdem" name="UnidadeEmOrdem" value="{{isset($product) ? $product->UnidadeEmOrdem : ''}}" placeholder="Unidade em Ordem">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="NivelDeReposicao">Nivel de Reposição</label>
                        <input type="text" class="form-control" id="NivelDeReposicao" name="NivelDeReposicao" value="{{isset($product) ? $product->NivelDeReposicao : ''}}" placeholder="Nivel de Reposição">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="descontinuado">Descontinuado</label>
                        <input type="text" class="form-control" id="descontinuado" name="descontinuado" value="{{isset($product) ? $product->descontinuado : ''}}" placeholder="Descontinuado">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="color: white;">{{isset($product) ? 'Edit Product' : 'Create Product'}}</button>
            </form>

        </div>

    </div>
@endsection
