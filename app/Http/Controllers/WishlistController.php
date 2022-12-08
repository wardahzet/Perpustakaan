<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    public function index(Request $request)
    {
        $count = Wishlist::where('user_email',Auth::user()->email)->count();
        $books = Wishlist::where('user_email',Auth::user()->email)->get();
        return view('detailRent')
                ->with('wishlists', $books)
                ->with('count',$count);
    }
    
    public function store($isbn)
    {
        $book = Wishlist::where('user_email',Auth::user()->email)->where('book_isbn',$isbn)->first();
        if(!$book){
            Wishlist::create ([
                'user_email' => Auth::user()->email,
                'book_isbn' => $isbn
            ]);
        }
        return back();
    }

    public function destroy($isbn)
    {
        Wishlist::where('user_email',Auth::user()->email)->where('book_isbn',$isbn)->delete();
        return back();
    }
}