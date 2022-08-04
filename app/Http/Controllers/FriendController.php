<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use auth;
use App\Models\Abonne;

class FriendController extends Controller
{

    public function index(){
        $user = User::all();
        $abonne = Abonne::where('user_id',  '=',  auth()->user()->id)->get();
        return view('layouts.friend', [
            'users' => $user,
            'abonnes' => $abonne
        ]);
    }

    public function store($request){
        $user = User::find($request);
        Abonne::create([
            'name' => $user->name,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('friend_liste');

    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
    }

    public function profile(){
        $user=User::find(auth()->user()->id);
        return view('layouts.profile', [
            'user' => $user
        ]);
    }

    public function approuve(){

    }
}
