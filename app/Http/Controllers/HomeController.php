<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $categories = Category::all();
        $book = Book::all();
        return view('home')
            ->with('categories', $categories)
            ->with('newbooks', $book->sortBy('created_at'))
            ->with('recommendations', $book->sortBy('readers'))
            ->with('popular', $book->sortBy('reading'));
    }

}
