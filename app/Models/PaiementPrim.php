<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiementPrim extends Model
{
    use HasFactory;

    protected $table = 'historique_prims';

    protected $fillable = [
        'mtant',
        'ac_id',
        'inscrire_id',
    ];
}
