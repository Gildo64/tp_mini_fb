<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;


class MessageController extends Controller
{
    public function index(){
        $allmessage = Messages::where('receiver_id',  '=',  auth()->user()->id)->orderBy('created_at', "DESC")->take(10)->get();
        return view('layouts.message', [
            'allMessages' => $allmessage
        ]);
    }

    public function details($id){
        $message = Messages::where('id',  '=',  $id)->first();

        $receiver=$message->receiver_id;
        $allRecu=Messages::where('receiver_id',  '=',  auth()->user()->id)->where('sender_id',  '=', $receiver)->orderBy('created_at', "DESC")->take(10)->get();

        
        $sender=$message->sender_id;

        $allEnvoye=Messages::where('sender_id',  '=',  auth()->user()->id)->where('receiver_id',  '=', $sender)->orderBy('created_at', "DESC")->take(10)->get();
        
        return view('layouts.message_details', [
            'allEnvoyes' => $allEnvoye,
            'allRecus'=>$allRecu
        ]);

    }

    public function store(Request $request){
        $request->validate([
            'contenu' => ['required', 'string']
        ]);

        Messages::create([
            'contenu' => $request['contenu'],
            'receiver_id' =>$request->id ,
            'sender_id' => auth()->user()->id
        ]);
        return redirect()->back();
    }
}
