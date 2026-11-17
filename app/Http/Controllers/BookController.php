<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view("welcome", compact("books"));
    }

    public function create()
    {
        return view("books-form");
    }

    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "published_year" => $request->published_year,
            "writer" => $request->writer,
            "cover_path" => "dummy.png"
        ]);

        return redirect("/");
    }



    public function edit(Book $book)
    {
        return view("books-edit", compact("book"));
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            "title" => $request->title,
            "published_year" => $request->published_year,
            "writer" => $request->writer,
            "cover_path" => $book->cover_path
        ]);

        return redirect("/");
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect("/");
    }
}