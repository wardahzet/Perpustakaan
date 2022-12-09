<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index($isbn)
    {
        $book = Book::find($isbn);
        $status = Wishlist::where('user_email',Auth::user()->email)
                            ->where('book_isbn',$isbn)->first();
        return view('bookDetails')
                ->with('book', $book)
                ->with('status', $status);
    }

    public function showEdit($isbn)
    {
        $book = Book::find($isbn);
        $categories = Category::all();
        return view('editBook')
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
        return view('booksData-admin')
                ->with('books', $books);
    }

    public function showCreate() {
        $categories = Category::all();
        return view('inputBooks')->with('categories', $categories);
    }
}
