<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index($isbn)
    {
        $book = Book::find($isbn);
        $like = Book::where('category_id', $book->category_id)
                ->where('isbn','!=', $isbn)->get()->random(1)->first();
        return view('member.bookDetails')
                ->with('book', $book)
                ->with('like', $like);
    }

    public function showEdit($isbn)
    {
        $book = Book::find($isbn);
        $categories = Category::all();
        return view('admin.editBook')
                        ->with('book', $book)
                        ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect('/book/all');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $book = Book::find($data['isbn']);
        $book->update([
            'isbn' => $data['isbn'],
            'title' => $data['title'],
            'author' => $data['author'],
            'publisher' => $data['publisher'],
            'year' => $data['year'],
            'cover' => $data['cover'],
            'synopsis' => $data['synopsis'],
        ]);
        return redirect('/book/all');;
    }

    public function destroy($isbn)
    {
        $book = Book::find($isbn);
        $book->delete();
        return redirect()->back();
    }

    public function showAll() {
        $books = Book::all();
        return view('admin.booksData-admin')
                ->with('books', $books);
    }

    public function showCreate() {
        $categories = Category::all();
        return view('admin.inputBooks')->with('categories', $categories);
    }

    public function view($isbn)
    {
        $book = Book::find($isbn);

        return view('admin.bookDetail')
                ->with('book', $book);
    }
}
