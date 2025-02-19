<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $fillable = ['nom_user','image_user','description','id_experience'];
    public $timestamps = true;

    public function experience()
    {
        return $this->belongsTo(Experience::class, 'id_experience');
    }
}
