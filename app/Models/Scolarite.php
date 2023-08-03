<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scolarite extends Model
{
    use HasFactory;

  /*   public function classe(){
        return $this->belongsTo(Classe::class, 'code_classe');
    }

    public function eleve(){
        return $this->belongsTo(Eleve::class,'id_eleve','id');
    }

    public function ansss(){
        return $this->belongsTo(Anneeacademique::class,'id_annee','id');
    } */
}
