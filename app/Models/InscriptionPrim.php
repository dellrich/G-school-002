<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionPrim extends Model
{
    use HasFactory;

    protected $primaryKey = 'mat_eleve';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $guarded = [];

    protected $table = 'inscription_prims';

    public function classep(){
        return $this->belongsTo(ClassePrim::class, 'code_classe');
    }

    public function elevep(){
        return $this->belongsTo(ElevePrim::class,'id_eleve','id');
    }

    public function ansssp(){
        return $this->belongsTo(AnneeacademiquePrim::class,'id_annee','id');
    }

    // public function anneescolaire(){
    //     return $this->belongsTo(Anneeacademique::class, 'code_ac');
    // }


    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function($query) use($term){
            $query->where('mat_eleve','like',$term)
            ->orWhere('prenom_eleve','like',$term);
        });
    }
}
