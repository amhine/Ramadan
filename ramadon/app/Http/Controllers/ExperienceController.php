<?php

namespace App\Http\Controllers;
use App\Models\Experience; 

use Illuminate\Http\Request;


class ExperienceController extends Controller 
{
    public function index()
    {
        $experiences = Experience::all();

        return view('experience', compact('experiences'));
    }
    public function create()
    {
        return view('formexperience');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom_user' => 'required|string',
            'image_user' => 'required|string',
            'titre' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|string',
        ]);
    
        Experience::create([
            'nom_user' => $request->input('nom_user'),
            'image_user' => $request->input('image_user'),
            'titre' => $request->input('titre'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]);
    
        return redirect('/experiences')->with('success', 'Recette créée avec succès.');

    }
}
