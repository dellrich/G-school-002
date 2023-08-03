<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElevePrim extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom_eleve',
        'nom_eleve',
        'date_nais',
        'lieu_naiss',
        'adresse',
        'noms_parent',
        'contact_parent',
        'photo',
        'id_sexe',
    ];


    public function sexep(){
        return $this->belongsTo(Sexe::class,'id_sexe','id');
    }

    public function inscriresp(){
        return $this->hasMany(InscriptionPrim::class);
    }
}
