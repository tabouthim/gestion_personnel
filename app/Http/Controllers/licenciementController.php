<?php

namespace App\Http\Controllers;


use App\Models\Licenciement;

class licenciementController extends Controller
{
    public function licenciement()
    {
        $licenciements= licenciement::all();
        return view('licenciement.Licenciement',['licenciements' => $licenciements]);
    }


}
