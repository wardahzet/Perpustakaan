<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $books;

    public function __construct()
    {
        $this->books = Book::all();
    }

    public function keywords(Request $request)
    {
        $keyword = $request->keyword;
        $book = Book::where('title', 'LIKE', "%$keyword%")->
                orWhere('author', 'LIKE', "%$keyword%")->
                orWhere('publisher', 'LIKE', "%$keyword%")->get();
        return view('member.searchResult')->with('books', $book);
    }

    public function category($keywords)
    {
        $this->books = $this->books->where('category_id',$keywords);
        return view('member.searchResult')->with('books', $this->books);
    }
    
    public function type($keywords)
    {
        if ($keywords == 'newbooks') 
        {
            $this->books = $this->books->sortBy('created_at');
        } 
        else if ($keywords == 'populars') 
        {
            $this->books = $this->books->sortBy('views');
        } 
        else if ($keywords == 'recommendations')
            $this->books = $this->books->sortBy('readers');
        return view('member.searchResult')->with('books', $this->books);
    }
}