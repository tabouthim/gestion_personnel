<?php

namespace App\Http\Controllers;


use App\Models\conge;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class congeController extends Controller
{
    public function conge()
    {
        $conges= conge::paginate(5);
        return view('conges.liste',['conges' => $conges]);
    }
    public function save_conge(Request $request)
    {
        $conge = new conge();
        $conge->employe = $request->employe;
        $conge->type_conge=$request->type_conge;
        $conge->date_debut = $request->date_debut;
        $conge->date_fin = $request->date_fin;
        $conge->statut = $request->statut;
        $conge->total_jour = $request->total_jour;
        $conge->save();
        return  redirect(route('liste_conge'));
    }
    Public function showDelete($id)
    {
        $conge=conge::find($id);

        return view('conges.delete',["conge"=>$conge]);
    }

    public function delete(Request $request)
    {
        $conge = conge::find($request->id);
        $conge->delete();
        return redirect(route('liste_conge'));
    }
    public function show($id)
    {
        $conge= conge::find($id);
        return view('conges.show', ["conge" => $conge]);
    }

    public function update (Request $request)
    {
        $conge = conge::find($request->id);
        $conge->employe = $request->input('employe');
        $conge->type_conge = $request->input('type_conge');
        $conge->date_debut = $request->input('date_debut');
        $conge->date_fin = $request->input('date');
        $conge->statut = $request->input('statut');
        $conge->total_jour = $request->input('total_jour');
        $conge->save();
        return redirect(route('liste_conge'));
    }

}
