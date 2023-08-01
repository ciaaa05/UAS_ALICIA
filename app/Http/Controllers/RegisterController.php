<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function create(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required|',
            'instagram' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:10|max:12|unique:users',
            'image' => 'required|image|file',
            'password' => 'required',
        ]);

        $credentials['image'] = $request->file('image')->store('image_user');
        $credentials['password'] = bcrypt($credentials['password']);

        User::create($credentials);

        return redirect('/login')->with('success', 'Successfully Registered');

    }
}
