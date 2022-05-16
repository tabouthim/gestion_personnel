<?php

namespace App\Http\Controllers;


use App\Models\presence;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class presenceController extends Controller
{
    public function presence()
    {
        $presences = presence::paginate(5);
        return view('presence.liste', ['presences' => $presences]);
    }

    public function save_presence(Request $request)
    {
        $presence = new presence();
        $presence->employe = $request->employe;
        $presence->date_heure_arriver = $request->date_heure_arriver;
        $presence->date_heure_retour = $request->date_heure_retour;
        $presence->save();
        return redirect(route('liste_presence'));
    }

}
