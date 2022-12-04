<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    
    public function index(Request $request)
    {
        $data = $request->all();
        $rent = Rent::find($data['id']);
    }

    public function history(Request $request)
    {
        $rent = Rent::where(['user_email', '=', Auth::user()->email],
                    ['status', '=', false]);
        return view('rentHistory')->with('rent', $rent);
    }

    public function active(Request $request)
    {
        $data = $request->all();
        $rent = Rent::where(['user_email', '=', Auth::user()->email],
                    ['status', '=', true]);
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
}
