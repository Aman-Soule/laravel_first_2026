<?php

namespace App\Http\Controllers;

use App\Models\type_assurances;
use Illuminate\Http\Request;

class TypeAssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = type_assurances::orderBy('id', 'DESC')->paginate(5); //model
        return view('type.typeassurance',['types'=>$types]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeassurance = new type_assurances();
        return view('type.add',['type'=>$typeassurance]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $typeassurance = new type_assurances();
        $typeassurance->libelle = $request['libelle'];
        $typeassurance->save(); //model
        return redirect('/type-assurance');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return type_assurances::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = $this->show($id);
        $type->delete();
        return redirect('/type-assurance');
    }
}
