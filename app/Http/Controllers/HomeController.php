<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $categories = Category::all();
        $book = Book::all();

        if (Auth::user() != null && Auth::user()->is_admin) {
            return redirect('/dashboard');
        }

        return view('home')
            ->with('categories', $categories)
            ->with('newbooks', $book->sortBy('created_at'))
            ->with('recommendations', $book->sortBy('readers'))
            ->with('populars', $book->sortBy('reading'));
    }

    public function dashboard(){
        return view ('dashboard');
    }

}
