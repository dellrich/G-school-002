<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesseurPrim extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_prof ',
        'prenom_prof',
        'datenais_prof',
        'adresse',
        'sexe',
        'telephone',
        'salaire',
        'photo',
      
        
    ];
}