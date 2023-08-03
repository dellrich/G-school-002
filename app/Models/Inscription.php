<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $primaryKey = 'mat_eleve';
    public $incrementing = true;
    protected $keyType = 'string';
    protected $guarded = [];

    protected $table = 'inscriptions';

    public function classe(){
        return $this->belongsTo(Classe::class, 'code_classe');
    }

    public function eleve(){
        return $this->belongsTo(Eleve::class,'id_eleve','id');
    }

    public function ansss(){
        return $this->belongsTo(Anneeacademique::class,'id_annee','id');
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
