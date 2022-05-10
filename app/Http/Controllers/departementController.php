<?php

namespace App\Http\Controllers;


use App\Models\departement;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class departementController extends Controller
{
    public function departement()
    {
        $departements= Departement::all();
        return view('departement.liste',['departements' => $departements]);
    }
    public function save_departement(Request $request)
    {
        $departement = new departement();
        $departement->nom = $request->nom;
        $departement->save();
      return  redirect(route('liste_departements'));
    }
    public function show($id)
    {
        $departement = Departement::find($id);
        return view('departement.show', ["departement" => $departement]);
    }
    public function update (Request $request)
    {
        $departement = departement::find($request->id);
        $departement->nom = $request->input('nom');
        $departement->save();
        return redirect(route('liste_departements'));
    }
    Public function showDelete ($id)
    {
        $departement=departement::find($id);

        return view('departement.delete',["departement"=>$departement]);
    }
    public function delete(Request $request)
    {
       $departement = departement::find($request->id);
        $departement->delete();
        return redirect(route('liste_departements'));
    }

}
