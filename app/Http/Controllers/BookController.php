<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
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

    public function store(Request $request)
    {
        $data = $request->all();
        $book = Book::create([
                    'isbn' => $data['isbn'],
                    'title' => $data['title'],
                    'author' => $data['author'],
                    'publisher' => $data['publisher'],
                    'year' => $data['year'],
                    'cover' => $data['cover'],
                    'header' => $data['header'],
                    'readers' => 0,
                    'views' => 0,
                    'created_at' => Carbon::now(),
                ]);
        return view('book.index')
                ->with('book', $book);
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
            'readers' => 0,
            'views' => 0
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
}
