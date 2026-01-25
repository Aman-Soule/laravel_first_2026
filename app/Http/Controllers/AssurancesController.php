<?php

namespace App\Http\Controllers;

use App\Models\assurances;
use Illuminate\Http\Request;

class AssurancesController extends Controller
{
    //Liste
    public function index()
    {
        $assurances = assurances::orderBy('created_at','DESC')->paginate(5); //Model
        return view('assurances.index', compact('assurances')); //View
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

    // Formulaire d’édition
    public function edit($id)
    {
        // Récupérer l'assurance par son ID
        $assurance = assurances::findOrFail($id);

        // Envoyer les données à la vue
        return view('assurances.edit', compact('assurance'));
    }


    public function update(Request $request, $id)
    {
        // Récupérer l'assurance par son ID
        $assurance = assurances::findOrFail($id);

        // Mettre à jour avec les nouvelles données
        $assurance->update($request->all());

        // Redirection vers la liste avec un message de succès
        return redirect()->route('assurances.index')
            ->with('success', 'Assurance mise à jour avec succès.');
    }


}
