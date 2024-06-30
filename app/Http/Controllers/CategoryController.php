<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function store() {
        $category = new Category();
        $category->category_name = request('category_name');
        $category->save();
        return redirect()->route('categories.index');
    }
}
