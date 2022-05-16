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
        $departements= departement::paginate(5);
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
    public function search()
    {
       $search_text = $_GET['query'];
        $departement =departement::where('NOM','LIKE','%'.$search_text.'%')->get();
        return view('departement.liste',["departement"=>$departement]);
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
    public function destroy(Request $request)
    {
        Evenement::where('id', $request->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Event removed successfully.'
        ]);
    }


}
