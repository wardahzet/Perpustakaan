<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $book = Book::find($data['isbn']);
        return view('book.index')
                ->with('book', $book);
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
}
