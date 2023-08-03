<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_classe',
        'scolarite',
        'tranche1',
        'tranche2',
        'tranche3',
        'id_cycle',
    ];

    public function coeffeclasse(){
        return $this->hasMany(Coefficient::class);
    }

}






