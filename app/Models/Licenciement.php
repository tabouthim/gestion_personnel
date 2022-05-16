<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licenciement extends Model
{
    protected $table = 'licenciement';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nom',
        'poste',
        'motif',
    ];
}
