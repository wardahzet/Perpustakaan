<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(Request $request){
        Rent::create([
            'user_email' => $request['user_email'],
            'book_isbn' => $request['book_isbn'],
            'rent_date' => now(),
            'boolean' => 'not-yet'
        ]);
    }
    public function update(Request $request){
        Rent::where('id', 1)
                ->update(['status' => 'done']);
    }
}
