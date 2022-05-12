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
        $conges= conge::all();
        return view('conge.liste',['conges' => $conges]);
    }
    public function save_conge(Request $request)
    {
        $conge = new conge();
        $conge->nom = $request->nom;
        $conge->save();
        return  redirect(route('liste_conges'));
    }
    public function show($id)
    {
        $conge = conge::find($id);
        return view('departement.show', ["conge" => $conge]);
    }
    public function update (Request $request)
    {
        $conge = conge::find($request->id);
        $conge->nom = $request->input('nom');
        $conge->save();
        return redirect(route('liste_conges'));
    }
    Public function showDelete ($id)
    {
        $conge=conge::find($id);

        return view('conge.delete',["conge"=>$conge]);
    }
    public function delete(Request $request)
    {
        $conge = conge::find($request->id);
        $conge->delete();
        return redirect(route('liste_conges'));
    }

}
