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
        return view('member.rentHistory')->with('rent', $rent);
    }

    public function active()
    {
        $rent = Rent::where('user_email',  Auth::user()->email)
                ->where('status', true)->get();
        return view('member.rentCurrent')->with('rent', $rent);
    }

    public function create(Request $request)
    {
        $datas = $request->book;
        foreach ($datas as $data){
            Rent::create([
                        'user_email' => Auth::user()->email,
                        'book_isbn' => $data,
                        'rent-date' => Carbon::now(),
                        'due_date' => Carbon::now()->addDays(3)
                    ]);
        }
        return redirect ('/rent-current');
    }

    public function update($id)
    {
        Rent::where('id', $id)
                ->update([
                    'status' => false,
                    'due_date' => Carbon::now()]);
        return redirect ('/rent-history');
    }

    public function validation(Request $request) {
        $data = $request->all();
        $isbn = $data['books'];
        $rents = Wishlist::where('user_email', Auth::user()->email)
                ->wherein('book_isbn', $isbn)->get();
        return view('member.review-peminjaman')->with('rents', $rents);
    }

}
