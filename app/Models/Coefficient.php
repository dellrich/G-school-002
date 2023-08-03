<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coefficient extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_classe',
        'id_matiere',
        'coef',
        
    ];

    public function classescoef()
    {
        return $this->belongsTo(Classe::class,'id_classe','id');
    }
    public function matierecoef()
    {
        return $this->belongsTo(Matiere::class,'id_matiere','id');
    }
}
