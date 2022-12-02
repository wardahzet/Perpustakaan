<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class RentController extends Controller
{
    
    public function index(Request $request)
    {
        $data = $request->all();
        Rent::all()->where('user_email', '=', $data['user_email']);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $rent = Rent::create([
                    'user_email' => $data['user_email'],
                    'book_isbn' => $data['book_isbn'],
                    'rent_date' => now(),
                    'boolean' => 'not-yet'
                ]);
        return view('rent.index')
            ->with('rent', $rent);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        Rent::where('id', $data['id'])
                ->update(['status' => 'done']);
    }
}
