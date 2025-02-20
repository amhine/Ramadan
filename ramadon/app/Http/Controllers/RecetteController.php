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
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'image' => 'nullable|string',
            'id_categorie' => 'required|exists:categories,id',
        ]);

        recette::create($request->all());

        return redirect()->route('recettes.index')
                         ->with('success', 'Recette créée avec succès.');
    }

   

  

   

    
}
