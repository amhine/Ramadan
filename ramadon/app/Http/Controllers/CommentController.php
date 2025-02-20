<?php

namespace App\Http\Controllers;
use App\Models\Experience; 
use Illuminate\Http\Request;
use App\Models\comment;

class CommentController extends Controller
{
    public function showCommentForm($id)
    {
        $experience = Experience::find($id);
        return view('formcomment', compact('experience'));
    }
    

public function store(Request $request)
{
    $request->validate([
        'nom_user' => 'required|string',
        'image_user' => 'required|string',
        'description' => 'required|string',
        'id_experience' => 'required|exists:experience,id', 
    ]);

    $comment = new Comment([
        'nom_user' => $request->input('nom_user'),
        'image_user' => $request->input('image_user'),
        'description' => $request->input('description'),
        'id_experience' => $request->input('id_experience'),
    ]);

    $comment->save();

    return redirect('/experiences')->with('success', 'Commentaire ajouté avec succès.');
}

}
