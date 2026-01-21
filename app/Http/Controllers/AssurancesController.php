<?php

namespace App\Http\Controllers;

use App\Models\assurances;
use Illuminate\Http\Request;

class AssurancesController extends Controller
{
    //Liste
    public function index()
    {
        $assurances = assurances::all();
        return view('assurances.index', compact('assurances'));
    }

    // Formulaire d’ajout
    public function create()
    {
        return view('assurances.create');
    }

    // Enregistrement
    public function store(Request $request)
    {
        assurances::create($request->all());
        return redirect()->route('assurances.index');
    }

    // Suppression
    public function destroy($id)
    {
        $assurance = assurances::findOrFail($id);
        $assurance->delete();
        return redirect()->route('assurances.index');
    }

}
