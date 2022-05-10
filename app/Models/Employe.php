<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    protected $table = 'employe';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'poste',
        'numero_cni',
        'date_naissance',
        'situation_marital',
        'lieu_naissance',
        'departement',
        'contrat',
        'debut',
        'email',
        'tel',
    ];
}
