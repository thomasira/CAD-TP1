<?php

namespace App\Http\Controllers;

use App\Models\Cad1Etudiant;
use App\Models\Cad1Ville;
use Illuminate\Http\Request;

class Cad1EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Cad1Etudiant::select()->paginate(15);
        return view('accueil.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Cad1Ville::all();
        return view('etudiant.create', compact('villes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'min:3 | max:45',
            'email' => 'required | email | max:45 | unique:cad1_etudiants',
            'phone' => 'min:7 | max:20',
            'date_naissance' => 'max:12 | date_format:Y-m-d'
        ]);
        $etudiant = Cad1Etudiant::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'phone' => $request->phone,
            'adresse' => $request->adresse,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]); 
        return redirect(route('etudiant.show', $etudiant))->withSuccess('étudiant créé!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cad1Etudiant $cad1Etudiant)
    {
        $etudiant = $cad1Etudiant;
        return view('etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cad1Etudiant $cad1Etudiant)
    {
        $villes = Cad1Ville::all();
        $etudiant = $cad1Etudiant;
        return view('etudiant.edit', compact('etudiant', 'villes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cad1Etudiant $cad1Etudiant)
    {
        $request->validate([
            'nom' => 'min:3 | max:45',
            'email' => 'required | email | max:45 ',
            'phone' => 'min:7 | max:20',
            'date_naissance' => 'max:12 | date_format:Y-m-d'
        ]);
        $cad1Etudiant->update([
            'nom' => $request->nom,
            'email' => $request->email,
            'phone' => $request->phone,
            'adresse' => $request->adresse,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]);
        return redirect(route('etudiant.show', $cad1Etudiant))->withSuccess('étudiant mis a jour!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cad1Etudiant $cad1Etudiant)
    {
        $cad1Etudiant->delete();
        return redirect(route('accueil'))->withSuccess('article supprimé!');
    }
}
