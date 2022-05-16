<?php

namespace App\Http\Controllers;


use App\Models\licenciement;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class licenciementController extends Controller
{
    public function licenciement()
    {
        $licenciements= licenciement::paginate(5);
        return view('licenciement.liste',['licenciements' => $licenciements]);
    }
    public function save_licenciement(Request $request)
    {
        $licenciement = new licenciement();
        $licenciement->nom = $request->nom;
        $licenciement->poste =$request->poste;
        $licenciement->motif=$request->motif;
        $licenciement->save();
        return  redirect(route('liste_licenciement'));
    }
    public function show($id)
    {
        $licenciement = licenciement::find($id);
        return view('licenciement.show', ["licenciement" => $licenciement]);
    }
    public function update (Request $request)
    {
        $licenciement = licenciement::find($request->id);
        $licenciement->nom = $request->input('nom');
        $licenciement->poste = $request->input('poste');
        $licenciement->motif = $request->input('motif');
        $licenciement->save();
        return redirect(route('liste_licenciement'));
    }
}
