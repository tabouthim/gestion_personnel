<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table = 'evenement';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'titre',
        'date_debut',
        'date_fin',
        'description',
    ];
}
