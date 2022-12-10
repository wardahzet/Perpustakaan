<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use App\Models\User;
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

        return view('member.home')
            ->with('categories', $categories)
            ->with('newbooks', $book->sortBy('created_at')->take(10))
            ->with('recommendations', $book->sortBy('readers')->take(10))
            ->with('populars', $book->sortBy('views')->take(10));
    }

    public function dashboard(){
        $book = Book::all()->count();
        $users = User::where('is_admin', false)->get();
        $rentc = Rent::where('status', true)->count();
        $renth = Rent::where('status', false)->count();
        $rents = Rent::all()->sortBy('rent_date')->take(10);
        return view ('admin.dashboard')
            ->with('book', $book)
            ->with('users', $users)
            ->with('rentc', $rentc)
            ->with('renth', $renth)
            ->with('rents', $rents);
    }

}
