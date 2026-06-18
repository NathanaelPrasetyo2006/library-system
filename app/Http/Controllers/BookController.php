<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title')->get();
        return view('manajemen_buku', compact('books'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:50',
            'stock' => 'nullable|integer|min:0',
            'category' => 'nullable|string|max:100',
            'cover_url' => 'nullable|url|max:2000',
        ]);

        $data['stock'] = $data['stock'] ?? 0;

        Book::create($data);

        return redirect()->route('buku')->with('success', 'Book added successfully.');
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'nullable|string|max:255',
            'isbn' => 'nullable|string|max:50',
            'stock' => 'nullable|integer|min:0',
            'category' => 'nullable|string|max:100',
            'cover_url' => 'nullable|url|max:2000',
        ]);

        $book->update($data);

        return redirect()->route('buku')->with('success', 'Book updated successfully.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('buku')->with('success', 'Book deleted successfully.');
    }
}
