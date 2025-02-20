<?php

namespace App\Http\Controllers;
use App\Models\recette;
use App\Models\categorie;

use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function index()
    {
        $recettes = Recette::with('categorie')->get();
        
        $categories = Categorie::all();
        return view('recettes', compact('recettes', 'categories'));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view('formrecettes', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|string',
            'image' => 'nullable|string',
            'id_categorie' => 'required|exists:categorie,id',
        ]);
    
        Recette::create([
            'titre' => $request->input('titre'),
            'contenu' => $request->input('contenu'),
            'image' => $request->input('image'),
            'id_categorie' => $request->input('id_categorie'),
        ]);
    
        return redirect('/recettes')->with('success', 'Recette créée avec succès.');

    }
    
   

  

   

    
}
