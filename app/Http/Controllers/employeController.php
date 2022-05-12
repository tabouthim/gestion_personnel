<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class employeController extends Controller
{
    public function employe()
    {
        $employes= Employe::all();
        return view('employes.liste',['employes' => $employes]);
    }
    public function save_employe(Request $request)
    {
        $employe = new employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->email=$request->email;
        $employe->tel=$request->tel;
        $employe->poste= $request->poste;
        $employe->departement = $request->departement;
        $employe->sexe = $request->sexe;
        $employe->numero_cni = $request->numero_cni;
        $employe->contrat=$request->contrat;
        $employe->situation_marital = $request->situation_marital;
        $employe->date_naissance = $request->date_naissance;
        $employe->lieu_naissance = $request->lieu_naissance;
        $employe->debut=$request->debut;
        $employe->save();
        return  redirect(route('liste_employe'));
    }
    Public function showDelete ($id)
    {
        $employe=employe::find($id);

        return view('employes.delete',["employe"=>$employe]);
    }
    public function delete(Request $request)
    {
        $employe = employe::find($request->id);
        $employe->delete();
        return redirect(route('liste_employe'));
    }
    public function show($id)
    {
        $employe = employe::find($id);
        return view('employes.show', ["employe" => $employe]);
    }
    public function update (Request $request)
    {
        $employe = employe::find($request->id);
        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->sexe = $request->input('sexe');
        $employe->contrat = $request->input('contrat');
        $employe->date_naissance = $request->input('date_naissance');
        $employe->debut = $request->input('debut');
        $employe->poste = $request->input('poste');
        $employe->departement = $request->input('departement');
        $employe->lieu_naissance = $request->input('lieu_naissance');
        $employe->numero_cni = $request->input('numero_cni');
        $employe->email = $request->input('email');
        $employe->tel = $request->input('tel');
        $employe->situation_marital = $request->input('situation_marital');
        $employe->save();
        return redirect(route('liste_employe'));
    }
    public function view (Request $request)
    {
        $employe = employe::find($request->id);
        $employe->nom->input('nom');
        $employe->prenom->input('prenom');
        $employe->sexe ->input('sexe');
        $employe->contrat ->input('contrat');
        $employe->date_naissance ->input('date_naissance');
        $employe->debut ->input('debut');
        $employe->poste ->input('poste');
        $employe->departement ->input('departement');
        $employe->lieu_naissance ->input('lieu_naissance');
        $employe->numero_cni ->input('numero_cni');
        $employe->email ->input('email');
        $employe->tel ->input('tel');
        $employe->situation_marital ->input('situation_marital');
        $employe->save();
        return redirect(route('liste_employe'));
    }

}
