<?php

use App\Models\assurances;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssurancesController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/assurances', function () {
//    $assurances = \App\Models\assurances::all();
//    $assurance = new assurances();
//    $assurance->libelle = 'SANTE';
//    $assurance->montant = 350000;
//    $assurance->bonus = 10; // attribut numérique
//    $assurance->save();
//    // Retourner toutes les assurances y compris celle qu’on vient d’ajouter
//    dd($assurances);

});




Route::get('/assurances', [AssurancesController::class, 'index'])->name('assurances.index');
Route::get('/assurances/create', [AssurancesController::class, 'create'])->name('assurances.create');
Route::post('/assurances', [AssurancesController::class, 'store'])->name('assurances.store');
Route::delete('/assurances/{id}', [AssurancesController::class, 'destroy'])->name('assurances.destroy');


Route::get('/assurances/{id}/edit', [AssurancesController::class, 'edit'])->name('assurances.edit');
Route::put('/assurances/{id}', [AssurancesController::class, 'update'])->name('assurances.update');

Route::get("/type-assurance",[\App\Http\Controllers\TypeAssuranceController::class,'index'])->name('type-assurance');
Route::get('/type/add', [\App\Http\Controllers\TypeAssuranceController::class,'create'])->name('type.add');
Route::post('/typeStore', [\App\Http\Controllers\TypeAssuranceController::class,'store'])->name('type.store');
Route::delete('deletType/{id}',[\App\Http\Controllers\TypeAssuranceController::class,'destroy'])->name('type.destroy');
Route::get('/editAssurance/{id}',[\App\Http\Controllers\TypeAssuranceController::class,'edit'])->name('type.edit');
Route::put('/updateAssurance',[\App\Http\Controllers\TypeAssuranceController::class,'update'])->name('type.update');
