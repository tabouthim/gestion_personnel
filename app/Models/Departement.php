<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departement';
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'nom',
    ];
}
