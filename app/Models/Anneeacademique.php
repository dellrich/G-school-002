<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anneeacademique extends Model
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
