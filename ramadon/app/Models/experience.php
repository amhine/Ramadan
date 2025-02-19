<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;
    protected $table = 'experience';
    protected $fillable = ['nom_user','image_user','titre','description','image'];
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_experience');
    }
}
