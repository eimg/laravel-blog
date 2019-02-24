<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    public function add()
    {
        return view('categories.add');
    }

    public function create()
    {
        $category = new Category();
        $category->name = request()->name;
        $category->save();
        return redirect('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update($id)
    {
        $category = Category::find($id);
        $category->name = request()->name;
        $category->save();
        return redirect('/categories');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
