<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presence extends Model
{
    protected $table = 'presence';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'employe',
        'heure_arriver',
        'heure_retour'
    ];
}
