<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('recettes', compact('categories'));
    }
}
