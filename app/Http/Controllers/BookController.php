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
        return view('editBook')
                        ->with('book', $book);
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
            'header' => $data['header'],
        ]);
        return view('book.index')
                ->with('book', $book);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        $book = Book::find($data['isbn']);
        $book->delete();
        return view('book.index')
                ->with('book', $book);
    }

    public function showAll() {
        Book::all();
        return view('booksData-admin')
                ->with('book', Book::all());
    }

    public function showCreate() {
        $categories = Category::all();
        return view('inputBooks')->with('categories', $categories);
    }
}
