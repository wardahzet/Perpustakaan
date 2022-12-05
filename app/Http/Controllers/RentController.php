<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rent;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    
    public function index(Request $request)
    {
        $data = $request->all();
        $rent = Rent::find($data['id']);
    }

    public function history()
    {
        $rent = Rent::where('user_email',  Auth::user()->email)
        ->where('status', false)->get();
        return view('rentHistory')->with('rent', $rent);
    }

    public function active()
    {
        $rent = Rent::where('user_email',  Auth::user()->email)
                ->where('status', true)->get();
        return view('rentCurrent')->with('rent', $rent);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        Rent::create([
                    'user_email' => $data['user_email'],
                    'book_isbn' => $data['book_isbn'],
                    'rent_date' => Carbon::now(),
                    'status' => true,
                ]);
        $this->active($request);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        Rent::where('id', $data['id'])
                ->update([
                    'status' => 'done',
                    'due_date' => Carbon::now()]);
        $this->active($request);
    }

    public function validation(Request $request) {
        $data = $request->all();
        $rent = Wishlist::where('user_email', Auth::user()->email)
                ->where('book_isbn', $data['isbn']);

                dd($rent);
        // return view('reviewRent')->with('rent', $rent);
    }
}
