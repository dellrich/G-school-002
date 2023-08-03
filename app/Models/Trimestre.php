<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;
    public function antrimestre(){
        return $this->belongsTo(Anneeacademique::class,'id_annee','id');
    }
}
