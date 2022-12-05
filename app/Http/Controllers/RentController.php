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
        $datas = $request->all();
        foreach ($datas as $data){
            Rent::create([
                        'user_email' => Auth::user()->email,
                        'book_isbn' => $data['book_isbn'],
                        'rent_date' => Carbon::now(),
                        'status' => true,
                    ]);
        }
        return redirect ('/rent-current');
    }

    public function update(Request $request)
    {
        $data = $request->all();
        Rent::where('id', $data['id'])
                ->update([
                    'status' => 'done',
                    'due_date' => Carbon::now()]);
        return redirect ('/rent-history');
    }

    public function validation(Request $request) {
        $data = $request->all();
        $rents = Wishlist::where('user_email', Auth::user()->email)
                ->where('book_isbn', $data);
        return view('review-peminjaman')->with('rent', $rents);
    }
}
