<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeacademiquePrim extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'id ',
        'code_ac ',
        'deb_ac',
        'fin_ac',
        'Statut_ac',

    ];
}
