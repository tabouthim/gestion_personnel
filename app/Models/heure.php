<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heure extends Model
{
    protected $table = 'heure';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'employe',
        'date',
        'heure_debut',
        'heure_fin',
        'total',
    ];
}
