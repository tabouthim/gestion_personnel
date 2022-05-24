<?php

namespace App\Http\Controllers;


use App\Models\heure;

use Faker\Guesser\Name;
use http\Env\Response;

use Illuminate\Http\Request;

class heureController extends Controller
{
    public function heure()
    {
        $heures = heure::paginate(5);
        return view('heure.liste', ['heures' => $heures]);
    }

    public function save_heure(Request $request)
    {
        $heure = new heure();
        $heure->employe = $request->employe;
        $heure->date = $request->date;
        $heure->heure_debut = $request->heure_debut;
        $heure->heure_fin = $request->heure_fin;
        $heure->total = $request->total;
        $heure->save();
        return redirect(route('liste_heure'));
    }


}


