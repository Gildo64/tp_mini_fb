<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
class CommentaireController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'contenu' => ['required', 'string']
        ]);


        //dd($request->id);


        Commentaire::create([
            'contenu' => $request['contenu'],
            'user_id' => auth()->user()->id,
            'publications_id' => $request->id
        ]);

        return redirect()->back();
    }

}
