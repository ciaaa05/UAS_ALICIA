<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Friend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function index(){
        $auth = auth()->user();
        $users = User::all();

        return view('home', compact('users', 'auth'));
    }

    public function filter($gender){
        $auth = auth()->user();
        $users = User::where('gender', $gender)->get();

        return view('home', compact('users', 'auth'));
    }

    public function wish(Request $request){
        Friend::create([
            'user1' => auth()->user()->id,
            'user2' => $request->user_2,
        ]);
        return redirect('/wishlist');
    }

    public function show_wish(){
        $friends = Friend::where('user1', auth()->user()->id)->get();
        return view('wishlist', compact('friends'));
    }
    public function requested(){
        $friends = Friend::where('user2', auth()->user()->id)->get();
        return view('requested', compact('friends'));
    }
    public function friend(Request $request){
        $friend = Friend::where('user2', auth()->user()->id)->where('user1', $request->user_1)->first();
        $friend->status1 = 'friend';
        $friend->status2 = 'friend';

        $friend->save();

        return redirect('/friend');
    }

    public function show_friend(){
        $friends = Friend::where('status1', 'friend')->get();
        return view('friend', compact('friends'));
    }

}
