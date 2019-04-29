<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index')->with('categories', Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.form');
    }






    public function store(CreateCategoryRequest $request)
    {
        $image = $request->figure->store('categories');

        Category::create([
            'nameCategory' => $request->nameCategory,
            'description' => $request->description,
            'figure' => $image

        ]);


        session()->flash('success', 'Category created successfully');

        return redirect(route('categories.index'));
    }






    public function show(Category $category)
    {
        return view('categories.show')->with('category', $category);
    }







    public function edit(Category $category)
    {
        return view('categories.form')->with('category', $category);
    }







    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $image = $request->figure->store('categories');

        $category->update([
            'nameCategory' => $request->nameCategory,
            'description' => $request->description,
            'figure' => $image

        ]);

        session()->flash('success', 'Category updated successfully');

        return redirect(route('categories.index'));
    }





    public function destroy(Category $category)
    {
        $category->delete();

        session()->flash('success', 'Category deleted successfully!');

        return redirect(route('categories.index'));
    }
}
