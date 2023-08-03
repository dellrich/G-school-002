<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexe extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
    ];

    public function eleve(){
        return $this->hasMany(Eleve::class);
    }

    public function elevep()
    {
        return $this->hasMany(ElevePrim::class);
    }
}
