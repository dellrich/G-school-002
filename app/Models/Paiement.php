<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'historiques';

    protected $fillable = [
        'mtant',
        'ac_id',
        'inscrire_id',
    ];
}
