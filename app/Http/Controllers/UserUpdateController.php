<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserUpdateController extends Controller
{
    public function update(Request $request){
        $data = $request->all();
        User::where('id', Auth::user()->id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'address' => $data['address'],
        ]);
        return back();
    }
}
