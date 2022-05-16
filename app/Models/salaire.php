<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salaire extends Model
{
    protected $table = 'salaire';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nom',
        'type_salaire',
        'montant',
        'montant_net',
        ];
}
