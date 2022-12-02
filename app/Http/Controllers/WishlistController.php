<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{

    public function index(Request $request)
    {
        $count = Rent::count();
        $wishes = Wishlist::all();
        return view('wishlist.index')
                ->with('wishes', $wishes)
                ->with('count', $count);
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        Wishlist::create ([
            'user_email' => $data['user_email'],
            'book_isbn' => $data['book_isbn']
        ]);
    }

    public function destroy(Request $request)
    {
        $data = $request->all();
        Wishlist::where('user_email', $data['user_email'])
                ->where('book_isbn', $data['book_isbn'])->delete();

        $count = Rent::count();
        $wishes = Wishlist::all();
        return view('wishlist.index')
                ->with('wishes', $wishes)
                ->with('count', $count);
    }
}
