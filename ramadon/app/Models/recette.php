<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recette extends Model
{
    use HasFactory;
    protected $table = 'recette';
    protected $fillable = ['titre','contenu','image','id_categorie'];
    public $timestamps = true;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }
}
