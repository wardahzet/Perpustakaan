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
        $count = Rent::count();
        $books = Wishlist::where('user_email',Auth::user()->email)->get();
        return view('detailRent')
                ->with('wishlists', $books)
                ->with('count',$count);
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        Wishlist::create ([
            'user_email' => Auth::user()->email,
            'book_isbn' => $data['book_isbn']
        ]);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        Wishlist::where('user_email', Auth::user()->email)
                ->where('book_isbn', $data['book_isbn'])->delete();

        $count = Rent::count();
        $wishes = Wishlist::all();
        return view('detailRent')
                ->with('wishes', $wishes)
                ->with('count', $count);
    }
}