<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAddRequest;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return to_route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return to_route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('admin.categories.index');
    }

}
