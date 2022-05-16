<?php

namespace App\Http\Controllers;


use App\Models\salaire;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class salaireController extends Controller
{
    public function salaire()
    {
        $salaires= salaire::paginate(5);
        return view('salaire.liste',['salaires' => $salaires]);
    }
    public function save_salaire(Request $request)
    {
        $salaire = new salaire();
        $salaire->nom = $request->nom;
        $salaire->type_salaire=$request->type_salaire;
        $salaire->montant = $request->montant;
        $salaire->montant_net = $request->montant_net;
        $salaire->save();
        return  redirect(route('liste_salaire'));
    }

}
