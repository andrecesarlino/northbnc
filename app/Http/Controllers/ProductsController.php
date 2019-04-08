<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Products\CreateProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;


class ProductsController extends Controller
{
    public function index() {

        return view('products.index')->with('products', Product::all());
    }

    public function create()  {

        return view('products.form');

    }

    public function store(CreateProductRequest $request) {

        Product::create([
            'nameProduct' => $request->nameProduct,
            'quantiade' => $request->quantidade,
            'precoUnitario' => $request->precoUnico,
            'UnidadeEmEstoque' => $request->UnidadeEmEstoque,
            'UnidadeEmOrdem' => $request->UnidadeEmOrdem,
            'NivelDeReposicao'=> $request->NivelDeReposicao,
            'descontinuado'=> $request->descontinuado
        ]);

        session()->flash('success', 'Product created successfully');

        return redirect(route('products.index'));

    }

    public function show(Product $product)
    {
        return view('products.show')->with('product', $product);
    }

    public function edit(Product $product)
    {
        return view('products.form')->with('product', $product);
    }

    public function update(UpdateProductRequest $request, Product $product) {

        $product->update([

            'nameProduct' => $request->nameProduct,
            'quantiade' => $request->quantidade,
            'precoUnitario' => $request->precoUnico,
            'UnidadeEmEstoque' => $request->UnidadeEmEstoque,
            'UnidadeEmOrdem' => $request->UnidadeEmOrdem,
            'NivelDeReposicao'=> $request->NivelDeReposicao,
            'descontinuado'=> $request->descontinuado
        ]);

        session()->flash('success', 'Product updated successfully');

        return redirect(route('products.index'));

    }

    public function destroy(Product $product) {
        $product->delete();

        session()->flash('success', 'Product deleted successfully!');

        return redirect(route('products.index'));
    }
}
