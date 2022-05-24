<?php

namespace App\Http\Controllers;


use App\Models\heuredetravail;

use Faker\Guesser\Name;
use http\Env\Response;

use Illuminate\Http\Request;

class heuredetravailController extends Controller
{
    public function heure()
    {
        $heures = heure::paginate(5);
        return view('heure.liste', ['heures' => $heures]);
    }

    public function save_departement(Request $request)
    {
        $heure = new heure();
        $heure->nom = $request->nom;
        $heure->save();
        return redirect(route('liste_heures'));
    }

    public function show($id)
    {
        $heure = heure::find($id);
        return view('heure.show', ["heure" => $heure]);
    }
}


