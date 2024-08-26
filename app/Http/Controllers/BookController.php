<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        $categories = Category::all();
        return view('buku', compact('books', 'categories'));
    }

    public function store(Request $request)
    {
        Book::create([
            'code' => $request->code,
            'title' => $request->title,
            'author' => $request->author,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('buku.index')->with('success', 'Book added successfully!');
    }

    public function destroy($id)
    {
        // Temukan buku berdasarkan ID atau kembalikan 404 jika tidak ditemukan
        $book = Book::findOrFail($id);

        // Hapus buku
        $book->delete();

        // Redirect ke halaman buku dengan pesan sukses
        return redirect()->route('buku.index')->with('success', 'Book deleted successfully!');
    }
}
