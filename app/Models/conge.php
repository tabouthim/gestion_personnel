<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conge extends Model
{
    protected $table = 'conge';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'employe',
        'type_conge',
        'date_debut',
        'date_fin',
        'statut',
        'raison',
        'total_jour',


    ];
}
