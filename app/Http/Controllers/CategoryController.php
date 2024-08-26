<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('kategori', compact('categories'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name_category' => 'required|string|max:100',
        // ]);

        Category::create([
            'name_category' => $request->input('kategori'),
        ]);

        return redirect()->route('kategori')->with('success', 'Category added successfully!');
    }
}
