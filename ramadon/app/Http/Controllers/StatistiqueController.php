<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\recette;

use App\Models\Experience; 

class StatistiqueController extends Controller
{
    public function index()
    {
        $totalPublications = Experience::count();
        $totalRecettes = Recette::count();
        $totalCommentaires = Comment::count();
        return view('statistique', compact('totalPublications', 'totalRecettes', 'totalCommentaires'));
        
    }
    

}
