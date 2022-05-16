<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\evenement;
use Faker\Guesser\Name;
use http\Env\Response;
use Illuminate\Http\Request;

class evenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $evenements = Evenement::whereDate('date_debut', '>=', $request->date_debut)
                ->whereDate('date_fin', '<=', $request->date_fin)
                ->get();

            return response()->json($evenements);
        }

        return view('calendar');
    }
    /**
     * Create new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = $request->only(['titre', 'departement', 'date_debut','date_fin','description']);

        $request_data = [
            'titre' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
        'description' => 'required',
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $evenement = Evenement::create([
            'titre' => $input['titre'],
            'date_debut' => $input['date_debut'],
            'date_fin' => $input['date_fin'],
            'description' => $input['description'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $evenement
        ]);
    }

    /**
     * update current event.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $input = $request->only(['id', 'titre', 'date_debut', 'date_fin','description']);

        $request_data = [
            'id' => 'required',
            'titre' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'description' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $evenement = Evenement::where('id', $input['id'])
            ->update([
                'titre' => $request['titre'],
                'date_debut' => $request['date_debut'],
                'date_fin' => $request['date_fin'],
                'description' => $request['description'],
            ]);

        return response()->json([
            'success' => true,
            'data' => $evenement,
        ]);
    }

    /**
     * Destroy the event.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
