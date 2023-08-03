<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatierePrim extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle_matiere'


    ];

    public function coeffematierep(){
        return $this->hasMany(Coefficient::class);
    }
}
