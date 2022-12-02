<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request) {
        Wishlist::create ([
            'user_email' => $request['user_email'],
            'book_isbn' => $request['book_isbn']
        ]);
    }

    public function delete(Request $request){
        Wishlist::where('user_email', $request['user_email'])
                ->where('book_isbn', $request['book_isbn'])->delete();
    }
}
